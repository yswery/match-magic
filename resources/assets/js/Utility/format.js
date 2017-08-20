export function nodeListToArray(selector) {
    return Array.prototype.slice.call(document.querySelectorAll(selector));
}