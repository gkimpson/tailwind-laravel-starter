import { PurgeCSS } from 'purgecss';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const inputPath = path.join(__dirname, 'resources/css/calendar-app.css');
const outputDir = path.join(__dirname, 'public/css');
const outputPath = path.join(outputDir, 'calendar-app.min.css');

// Get original file size
const originalSize = fs.statSync(inputPath).size;

// Configure and run PurgeCSS
const purgeCSSResults = await new PurgeCSS().purge({
    content: [
        './resources/views/calendar.blade.php',
        './resources/views/calendar/**/*.blade.php',
        './resources/js/calendar.js',
    ],
    css: [inputPath],
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
    safelist: {
        standard: [
            // FullCalendar classes
            /^fc-/,
            // Flowbite/Modal/Drawer classes
            /^drawer-/,
            /^modal-/,
            // Common utility classes that might be added dynamically
            'hidden',
            'block',
            'flex',
            'grid',
        ],
        deep: [/^fc-/, /^drawer-/, /^modal-/],
        greedy: [/^fc-/, /^drawer-/, /^modal-/],
    }
});

// Ensure output directory exists
if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
}

// Write the purged CSS
const purgedCSS = purgeCSSResults[0].css;
fs.writeFileSync(outputPath, purgedCSS);

// Calculate size reduction
const newSize = Buffer.byteLength(purgedCSS, 'utf8');
const reduction = ((1 - newSize / originalSize) * 100).toFixed(2);

console.log('✓ CSS purged successfully!');
console.log(`  Original size: ${(originalSize / 1024).toFixed(2)} KB`);
console.log(`  New size: ${(newSize / 1024).toFixed(2)} KB`);
console.log(`  Reduction: ${reduction}%`);
console.log(`  Output: ${outputPath}`);
