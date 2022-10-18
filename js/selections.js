function hideShowFlavors() {
    if (document.getElementById('tamanho-grande').checked) {
        document.getElementById('sabores2').style.display = '';
        document.getElementById('sabores3').style.display = '';
    } else if (document.getElementById('tamanho-medio').checked) {
        document.getElementById('sabores2').style.display = '';
        document.getElementById('sabores3').style.display = 'none';
        emptySelection('sabor3')
    } else if (document.getElementById('tamanho-pequeno').checked) {
        document.getElementById('sabores2').style.display = 'none';
        emptySelection('sabor2')
        document.getElementById('sabores3').style.display = 'none';
        emptySelection('sabor3')
    }
}

function emptySelection(elementName) {
    document.getElementById(elementName).selectedIndex = '0';
}