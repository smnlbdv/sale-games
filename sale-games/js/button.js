document.querySelector('#block1').addEventListener('click', function (e) {
    var div = document.querySelector('#tab-01')
    div.style.display = div.style.display === 'none' ? 'flex' : 'none'
    div.style.display = div.style.display === 'flex' ? 'flex' : 'flex'
    var div = document.querySelector('#tab-02')
    div.style.display =   'none'
    var div = document.querySelector('#tab-03')
    div.style.display = 'none'
  })

  document.querySelector('#block2').addEventListener('click', function (e) {
    var div = document.querySelector('#tab-01')
    div.style.display = 'none'
    var div = document.querySelector('#tab-02')
    div.style.display = div.style.display === 'none' ? 'flex' : 'none'
    div.style.display = div.style.display === 'flex' ? 'flex' : 'flex'
    var div = document.querySelector('#tab-03')
    div.style.display = 'none'
  })

  document.querySelector('#block3').addEventListener('click', function (e) {
    var div = document.querySelector('#tab-01')
    div.style.display = 'none'
    var div = document.querySelector('#tab-02')
    div.style.display = 'none'
    var div = document.querySelector('#tab-03')
    div.style.display = div.style.display === 'none' ? 'flex' : 'none'
    div.style.display = div.style.display === 'flex' ? 'flex' : 'flex'
  })
