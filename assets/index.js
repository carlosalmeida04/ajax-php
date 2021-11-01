$('#form').submit(e => {
    e.preventDefault()
    let prato = $('#prato').val()
    let preco = $('#preco').val()
    console.log(prato, preco)
    $.ajax({
        type: "POST",
        url: 'api/functions.php',
        action: 'insertPratos',
        dataType: 'TEXT',
        data: {
            pratoP: prato,
            precoP: preco,
            function: 'insertPratos'
        },
        error: err => {
            JSON.stringify(err)
            console.log(err)
        }
    })
})