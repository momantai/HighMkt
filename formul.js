window.addEventListener('load', () => {

    cs = document.getElementById('contactSuccess')
    ce = document.getElementById('contactError')
    elementsform = document.querySelectorAll('input[type="text"], input[type="email"], textarea')

    sendData = () => {
        XHR = new XMLHttpRequest()
        df = new FormData(form)

        XHR.addEventListener("error", (event) => {
            cs.classList.add('d-none')
            ce.classList.remove('d-none')
        });

        XHR.open('POST', 'php/contact-form.php')
        XHR.send(df)

        XHR.onreadystatechange = () => {
            if (XHR.readyState === 4) {
                r = JSON.parse(XHR.response)

                if (r.response == "success") {
                    cs.classList.remove('d-none')
                    ce.classList.add('d-none')

                    for (i = 0; i < elementsform.length; i++) {
                        elementsform[i].value = ""
                    }

                    grecaptcha.reset()
                } else {
                    cs.classList.add('d-none')
                    ce.classList.remove('d-none')
                }
            }
        }


    }

    form = document.getElementById('contactForm')

    form.addEventListener('submit', (event) => {
        event.preventDefault()

        sendData();
    })
})