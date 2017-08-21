import { LIGHT_GALLERY } from './config/selectors';
import { nodeListToArray } from './Utility/format';
import 'lightgallery.js';
import 'lg-zoom.js';

class Gallery {
    constructor() {

        document.addEventListener('DOMContentLoaded', () => {
            let lightGalleryNodes = nodeListToArray(LIGHT_GALLERY);

            // https://github.com/sachinchoolur/lightgallery.js/issues/36
            if (lightGalleryNodes) {
                lightGalleryNodes.forEach((lightGalleryNode) => {
                    lightGallery(lightGalleryNode); // eslint-disable-line no-undef
                });
            }
        });
    }
}

export default new Gallery();
