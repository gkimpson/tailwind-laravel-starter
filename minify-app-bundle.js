import { minify } from 'terser';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const inputPath = path.join(__dirname, 'public/js/app.bundle.js');
const outputPath = path.join(__dirname, 'public/js/app.bundle.min.js');

console.log('Reading app.bundle.js...');
const code = fs.readFileSync(inputPath, 'utf8');
const originalSize = fs.statSync(inputPath).size;

console.log('Minifying...');
const result = await minify(code, {
    compress: {
        dead_code: true,
        drop_console: true, // Remove console.log statements
        drop_debugger: true,
        unused: true,
        passes: 2, // Multiple compression passes
        pure_funcs: ['console.log', 'console.info', 'console.debug'],
    },
    mangle: {
        toplevel: true, // Mangle all names for better compression
    },
    format: {
        comments: false, // Remove comments
    },
});

if (result.error) {
    console.error('Minification error:', result.error);
    process.exit(1);
}

console.log('Writing app.bundle.min.js...');
fs.writeFileSync(outputPath, result.code);

const newSize = Buffer.byteLength(result.code, 'utf8');
const reduction = ((1 - newSize / originalSize) * 100).toFixed(2);

console.log('✓ Minification complete!');
console.log(`  Original size: ${(originalSize / 1024 / 1024).toFixed(2)} MB`);
console.log(`  Minified size: ${(newSize / 1024 / 1024).toFixed(2)} MB`);
console.log(`  Reduction: ${reduction}%`);
console.log(`  Output: ${outputPath}`);
