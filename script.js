document.addEventListener('DOMContentLoaded', () => {
  
    const artistCards = document.querySelectorAll('.artist-card');
    const carouselContainer = document.getElementById('carousel');
    const leftArrow = document.querySelector('.carousel-arrow.left');
    const rightArrow = document.querySelector('.carousel-arrow.right');

    
    artistCards.forEach(card => {
        card.addEventListener('click', () => {
            
            artistCards.forEach(otherCard => {
                if (otherCard !== card) {
                    otherCard.classList.remove('is-active');
                }
            });
            
            card.classList.toggle('is-active');
        });
    });

   
    const firstCarouselItem = document.querySelector('.carousel-item');
    const scrollAmount = firstCarouselItem ? firstCarouselItem.offsetWidth + 20 : 350;

    if (leftArrow && carouselContainer) {
        leftArrow.addEventListener('click', () => {
            carouselContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    }

    if (rightArrow && carouselContainer) {
        rightArrow.addEventListener('click', () => {
            carouselContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }


   
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxOverlay = document.getElementById('lightbox-overlay');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxArtist = document.getElementById('lightbox-artist');
    const lightboxYear = document.getElementById('lightbox-year');
    const lightboxDescription = document.getElementById('lightbox-description');
    const lightboxClose = document.querySelector('.lightbox-close');

   
    const paintingsData = [
        {
            title: 'Armonía en Rojo',
            artist: 'Henri Matisse',
            year: '1908',
            description: 'Esta obra maestra es conocida por su uso audaz de colores vibrantes y aplanados, desafiando la perspectiva tradicional para crear un efecto decorativo y emocional.'
        },
        {
            title: 'La Ventana Abierta',
            artist: 'Henri Matisse',
            year: '1905',
            description: 'Pintado en Collioure, esta obra explora la luz y el color. El marco de la ventana actúa como una transición entre el interior y el exterior, lleno de vida y color.'
        },
        {
            title: 'La Alegría de Vivir',
            artist: 'Henri Matisse',
            year: '1905-1906',
            description: 'Considerada una de las obras más importantes del fauvismo. Muestra una utopía pastoral de figuras desnudas en un paisaje vibrante, celebrando la libertad y la armonía con la naturaleza.'
        },
        {
            title: 'La Danza',
            artist: 'Henri Matisse',
            year: '1909-1910',
            description: 'Matisse utiliza el color puro y las líneas simples para transmitir movimiento y energía. Las figuras se entrelazan en un círculo de danza, simbolizando la unidad y la vida.'
        },
        {
            title: 'Mujer con Sombrero',
            artist: 'Henri Matisse',
            year: '1905',
            description: 'Un retrato de la esposa de Matisse, Amélie, que fue un shock para el público en su época debido a su uso de colores no naturales. Las pinceladas sueltas y la combinación de tonos demuestran la fuerza del movimiento fauvista.'
        },
        {
            title: 'Maqueta Noche de Navidad',
            artist: 'Henri Matisse',
            year: '1952',
            description: 'Una de sus últimas obras, en la que Matisse utilizó la técnica del "gouache découpé" (recorte de papel). La sencillez de la forma y el color puro crean una poderosa declaración de fe.'
        },
        {
            title: 'La Curva del Camino',
            artist: 'André Derain',
            year: '1906',
            description: 'Con fuertes contrastes y colores puros, esta obra captura un paisaje soleado. La carretera curva actúa como un elemento dinámico que guía la mirada del espectador a través del lienzo.'
        },
        {
            title: 'Mujer con Camisa',
            artist: 'André Derain',
            year: '1905',
            description: 'Un retrato que muestra la influencia del fauvismo en su forma más pura. La pincelada gruesa y los colores llamativos demuestran su búsqueda de la expresión emocional sobre la representación realista.'
        },
        {
            title: 'La Danza - Baile de la Vida',
            artist: 'André Derain',
            year: '1906',
            description: 'Una versión vibrante y enérgica de un tema clásico, donde las figuras en movimiento son una explosión de color. El paisaje de fondo es un juego de tonos intensos que crean una sensación de euforia.'
        },
        {
            title: 'El Puente de Charing Cross',
            artist: 'André Derain',
            year: '1906',
            description: 'Pintado durante su estancia en Londres, esta obra muestra una vista del Támesis y del famoso puente. El uso de colores brillantes transforma la escena industrial en algo vibrante y dinámico.'
        },
        {
            title: 'Retrato de Henri Matisse',
            artist: 'André Derain',
            year: '1905',
            description: 'Este retrato es un diálogo entre dos de los grandes maestros del fauvismo. Derain captura la seriedad y el carácter de Matisse, utilizando colores audaces y un fondo plano para resaltar su figura.'
        },
        {
            title: 'Retrato de André Derain',
            artist: 'Maurice de Vlaminck',
            year: '1905',
            description: 'Vlaminck, conocido por su estilo impulsivo, pinta a su amigo y compañero con una paleta de colores intensa y expresiva. La obra refleja la energía y el espíritu de la época.'
        },
        {
            title: 'Autumn',
            artist: 'Maurice de Vlaminck',
            year: '1905',
            description: 'En esta obra, Vlaminck explora el paisaje a través de colores saturados. Los tonos otoñales son exagerados para transmitir una sensación de emoción, en lugar de un reflejo de la realidad.'
        },
        {
            title: 'Restaurant de la Machine Bougival',
            artist: 'Maurice de Vlaminck',
            year: '1905',
            description: 'Una escena de calle que estalla en color. Vlaminck captura la atmósfera de un día soleado, utilizando contrastes de luz y sombra para crear un efecto dramático.'
        },
        {
            title: 'The Orchard',
            artist: 'Maurice de Vlaminck',
            year: '1906',
            description: 'Un paisaje vibrante que se aleja de la representación tradicional. Los árboles y el cielo son un lienzo para la experimentación con el color puro y la pincelada suelta, un sello distintivo del fauvismo.'
        },
        {
            title: 'Chaville',
            artist: 'Maurice de Vlaminck',
            year: '1906',
            description: 'Un paisaje urbano que se transforma con colores intensos y audaces. Vlaminck captura la esencia del lugar, infundiéndole una emoción que va más allá de la mera representación.'
        },
        {
            title: 'Veleros de Papel',
            artist: 'Maurice de Vlaminck',
            year: '1905',
            description: 'Una obra que evoca la simplicidad y el movimiento. Las formas de los botes son audaces y el agua está representada con una paleta de colores que transmite energía y vitalidad.'
        }
    ];

    const openLightbox = (index) => {
        const info = paintingsData[index];
        const currentItem = galleryItems[index];

        if (info) {
            lightboxImage.src = currentItem.querySelector('img').src;
            lightboxTitle.textContent = info.title;
            lightboxArtist.textContent = `Autor: ${info.artist}`;
            lightboxYear.textContent = `Año: ${info.year}`;
            lightboxDescription.textContent = info.description;
            lightboxOverlay.style.display = 'flex';
        }
    };

    
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            openLightbox(index);
        });
    });

    
    lightboxClose.addEventListener('click', () => {
        lightboxOverlay.style.display = 'none';
    });

   
    lightboxOverlay.addEventListener('click', (e) => {
        if (e.target === lightboxOverlay) {
            lightboxOverlay.style.display = 'none';
        }
    });

  
    document.addEventListener('keydown', (e) => {
        if (lightboxOverlay.style.display === 'flex' && e.key === 'Escape') {
            lightboxOverlay.style.display = 'none';
        }
    });
});

