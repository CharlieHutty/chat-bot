export function getUserName() {
    $(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: 'https://127.0.0.1:8000/user-name.php',
                data: $('form').serialize(),
                success: function (response) {
                    let tag = document.createElement("p");
                    let text = document.createTextNode('Hello, ' + response + ' what category of Holiday would you like?');
                    tag.appendChild(text);
                    let element = document.getElementsByClassName('bot-questions')[0];
                    element.appendChild(tag);
                }
            });
        });
    });
}