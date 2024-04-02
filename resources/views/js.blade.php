<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Assignment</title>
    <style>
        body {
            font-size: 80px;
        }

        .d-none {
            display: none !important;
        }

        #div1, #div2 {
            white-space: nowrap;
            display: flex;
            position: relative;
            height: 90px;
        }

        #div1 span, #div2 span {
            display: inline-block;
            width: 75px;
            text-align: center;
            font-weight: bold;
        }

        .move-animation {
            animation: moveAnimation 1s ease forwards;
        }

        @keyframes moveAnimation {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(50px); /* Move by 50px, adjust as needed */
            }
        }
    </style>
</head>
<body>

<div id="div1">Hello World</div>
<div id="div2"></div>
<button id="myButton">Click me</button>

<script>

    textSegmentation();

    const myButton = document.getElementById('myButton');

    myButton.addEventListener('click', handleClick);

    function handleClick() {
        myButton.removeEventListener('click', handleClick);
        execute();
    }

    function execute() {
        // Get all the spans within the div
        const spans = document.querySelectorAll('#div2 > span');
        const promises = [];
        spans.forEach((span, index) => {
            if (index % 2 !== 0) {
                promises.push(showSegmentsWithDelay(index, span))
            }
        });

        //after all od segments added delay 1 second and show all
        Promise.all(promises)
            .then(() => {
                setTimeout(() => {
                    const div1 = document.getElementById('div1');
                    const div2 = document.getElementById('div2');
                    div2.innerHTML = div1.innerHTML;
                }, 1000)
            });
    }

    function showSegmentsWithDelay(index, span) {
        return new Promise(resolve => {
            setTimeout(() => {
                span.classList.remove('d-none');
                resolve();
            }, 4000 + (index * 1000)); // Add delay based on index
        });
    }

    function textSegmentation() {
        const div1 = document.getElementById('div1');
        const div2 = document.getElementById('div2');
        const textToArray = div1.textContent.split('');
        div1.textContent = '' // clear original text
        for (let i = 0; i < textToArray.length; i++) {
            const char = textToArray[i];
            const span1 = document.createElement('span');
            const span2 = document.createElement('span');
            span1.textContent = char;
            if (i % 2 !== 0) {
                span2.textContent = char;
                span2.classList.add('d-none')
            }
            div1.appendChild(span1.cloneNode(true));
            div2.appendChild(span2.cloneNode(true));
        }
    }
</script>

</body>
</html>
