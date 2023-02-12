import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

window.onload = (event) => {
    const elms = document.querySelectorAll('[data-toast-editor]');
    if (elms.length <= 0) {
        return;
    }

    elms.forEach(el => {
        let name = el.getAttribute('name');
        let elm = document.querySelector(`[name='${name}']`);
        let editor = new Editor({
            el: elm,
            height: '250px',
            initialEditType: 'markdown',
            placeholder: el.placeholder,
        });

        elm.id = `${name}_edid`;
        elm.removeAttribute('name');

        var inp = document.createElement('input');
        inp.setAttribute('name', name);
        inp.setAttribute('type', 'hidden');

        elm.insertAdjacentElement('afterend', inp);
        setInterval(() => {
            inp.value = editor.getMarkdown();
        }, 300);
    });



    //   // save data to input every 3 ms
    //   setInterval(() => {
    //       document.querySelector('#editor_content').value = editor.getMarkdown();
    //   }, 300);
};
