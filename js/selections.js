function hideShowFlavors() {
    if (document.getElementById('tamanho-grande').checked) {
        document.getElementById('sabor2').style.display = '';
        document.getElementById('sabor3').style.display = '';
    } else if (document.getElementById('tamanho-medio').checked) {
        document.getElementById('sabor2').style.display = '';
        document.getElementById('sabor3').style.display = 'none';
        document.getElementById('sabor3').selectedIndex = 0;
    } else if (document.getElementById('tamanho-pequeno').checked) {
        document.getElementById('sabor2').style.display = 'none';
        document.getElementById('sabor2').selectedIndex = 0;
        document.getElementById('sabor3').style.display = 'none';
        document.getElementById('sabor3').selectedIndex = 0;
    }
}