import 'flowbite';

// Initialize Flowbite components
import { initFlowbite } from 'flowbite';

// Import calendar functionality
import './calendar';

// Initialize components when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initFlowbite();
});

// Re-initialize components after Livewire updates
if (typeof Livewire !== 'undefined') {
    Livewire.hook('message.processed', () => {
        initFlowbite();
    });
}