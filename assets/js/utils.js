/**
 * r Response
 */
const parseResponse = async (r) => {
    if (r.status > 399) {
        const resp = await r.json(); 
        throw resp;
    }
    return r.json();
};

const handleError = (err) => {
    console.error(err);
    
    new Noty({
        type: 'error',
        layout: "topCenter", 
        text: err.Error || err.message || "An unexpected error has happened",
    }).show()
}

const validateForm = (form) => {
    const requiredFields = form.querySelectorAll("input[required]");

    for (field of requiredFields) {
        if (!field.checkValidity()) {
            return {
                Valid: false,
                Error: `Please fill field ${field.name} with a valid value.` 
            }
        }
    }

    return {
        Valid: true
    };
}

function fallbackCopyTextToClipboard(text) {
    const textArea = document.createElement("textarea");
    textArea.value = text;
    textArea.style.position="fixed";
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        const successful = document.execCommand('copy');
        const msg = successful ? 'successful' : 'unsuccessful';
        console.log('Fallback: Copying text command was ' + msg);
    } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
    }

    document.body.removeChild(textArea);
}

function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(text);
        return;
    }
    navigator.clipboard.writeText(text).then(function() {
        console.log('Async: Copying to clipboard was successful!');
    }, function(err) {
        console.error('Async: Could not copy text: ', err);
    });
}