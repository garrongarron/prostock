((window, document) => {
// npm run dev
let messages = {
    from: 'Moving from ',
    to: 'Moving to ',
    batch: 'Setting batch as ',
    // from: 'Setting from where',
    // from: 'Setting from where',
}

let actions = {
    from: (that) => {
        window.storage.setLocal('from', JSON.parse(that.getAttribute('k')))
        // console.log(window.storage.getLocal('from'))
    },
    to: (that) => {
        window.storage.setLocal('to', JSON.parse(that.getAttribute('k')))
    },
    batch: (that) => {
        window.storage.setLocal('batch', JSON.parse(that.getAttribute('k')))
    }


}

let getMsg = (that) => {
    let v = that.getAttribute('var')
    if(messages[v]){
        return messages[v] + '"' + that.innerHTML + '"';
    }
    return null;
}


let triggerAction = (that) => {
    let v = that.getAttribute('var')
    if(actions[v]){
        actions[v](that);
    }
    // return 'Are you sure?';
}

let a = document.querySelectorAll('a');

for (var i = 0; i < a.length; i++) {
    a[i].addEventListener('click', function(event) {
        if(getMsg(this) === null ){
            return false;
        }
        if (!confirm(getMsg(this))) {
            event.preventDefault();
        } else {
            triggerAction(this)
        }
    });
}


let span = document.querySelectorAll('span')
for (var i = 0; i < span.length; i++) {
    let text = span[i].getAttribute('text');
    console.log(text)
    span[i].innerHTML = window.storage.getLocal(text).name;
    // console.log(window.storage.getLocal(text).name)
}

window.getRandomCode = () => {
    let n = Math.floor(Math.random() * 10) + 10000 ;
    document.querySelector('#item-code').value = n;
    window.storage.setLocal('item', n)
}


window.save = () => {
    let item = document.querySelector('#item-code').value;
    if(item == ''){
        alert("You mut to select an Item")
    }
    console.log({
        from:window.storage.getLocal('from').id,
        to:window.storage.getLocal('to').id,
        batch:window.storage.getLocal('batch').id,
        item:window.storage.getLocal('item'),

    })

    fetch('http://localhost:88/api/transactions', {
        method: 'POST',
        body: JSON.stringify({
            from:window.storage.getLocal('from').id,
            to:window.storage.getLocal('to').id,
            batch:window.storage.getLocal('batch').id,
            item:window.storage.getLocal('item'),
            user:1
        }),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })
    .then(response => response.json())
    .then(json => {
        console.log(json)
        document.querySelector('#item-code').value = '';
    });
}



})(window, document)