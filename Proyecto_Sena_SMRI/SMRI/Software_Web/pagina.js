var imagenes = ['imagenes/imagen1.jpg','imagenes/imagen2.jpg','imagenes/imagen3.jpg','imagenes/imagen4.jpg']
cont = 0;

function carrousel(contenedor) {
    contenedor.addEventListener('click', e=>{
        let atras = contenedor.querySelector('.atras'),
        adelante = contenedor.querySelector('.adelante'),
        imagenes = contenedor.querySelector('imagen'),
        tgt = e.target;
        if (tgt==atras) {
            if (cont > 0){
                img.src = imagenes[cont - 1];
                cont--;
            } else {
                img.src = imagenes[imagenes.length - 1];
                cont = imagenes.length - 1;
            }
        } else if (tgt = adelante) {
            if (cont < imagenes.length - 1){
                img.src = imagenes[cont + 1];
                cont++;
            } else {
                img.src = imagenes[0];
                cont = 0;
            }
        }

    });
}

document.addEventListener('DOMcontentLoaded', () => {
    let contenedor = document.querySelector('.contenedor');
    carrousel(contenedor);
})