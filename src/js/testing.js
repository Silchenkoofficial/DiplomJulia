const result = [];

const initResult = (result) => {
    for (let i = 0; i < getCookie('countOfQuestion'); i++) {
        result[i] = {
            question: null,
            answer: null,
            value: null,
            key: null
        };
    }
}

const updateResult = (
    index,
    questionID,
    answerID,
    value,
    keyID
) => {
    result[index] = {
        question: questionID,
        answer: answerID,
        value: value,
        key: keyID
    }
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


$(document).ready(() => {
    initResult(result);
    $('.question:first').css('display', 'block')
    let numberOfQuestion = 49;
    $('#count').text(`${numberOfQuestion}/${result.length}`);
    $('.answer').click((e) => {
        updateResult(
            numberOfQuestion,
            $(e.target).parent().attr('data-id'),
            $(e.target).attr('data-id'),
            $(e.target).children().attr('data-value'),
            $(e.target).parent().attr('data-key')
        )
        numberOfQuestion++;
        $('#count').text(`${numberOfQuestion}/${result.length}`);
        $('.question').css('display', 'none')
        $('.question:eq(' + numberOfQuestion + ')').css('display', 'block')
        console.log(result);
    })
});