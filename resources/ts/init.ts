import EditorSettings from "@babyandy0111/block-editor/dist/interfaces/editor-settings";
import { initializeEditor } from "@babyandy0111/block-editor";
import defaultSettings from "./default-settings";

export const init = (
    target: string|HTMLInputElement|HTMLTextAreaElement,
    settings: EditorSettings = {}
) => {
    let element

    if (typeof target === 'string') {
        element = document.getElementById(target) || document.querySelector(target)
    } else {
        element = target
    }

    if (!element) {
        return
    }

    initializeEditor(element, { ...defaultSettings, ...settings })
}
