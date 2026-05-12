


// NUMEROS A LETRAS
function numeroALetras(numero) {

    numero = parseInt(numero);

    const unidades = [
        '',
        'Uno',
        'Dos',
        'Tres',
        'Cuatro',
        'Cinco',
        'Seis',
        'Siete',
        'Ocho',
        'Nueve'
    ];

    const especiales = [
        'Diez',
        'Once',
        'Doce',
        'Trece',
        'Catorce',
        'Quince',
        'Dieciséis',
        'Diecisiete',
        'Deciocho',
        'Diecinueve'
    ];

    const decenas = [
        '',
        '',
        'Veinte',
        'Treinta',
        'Cuarenta',
        'Cincuenta',
        'Sesenta',
        'Cetenta',
        'Ochenta',
        'Noventa'
    ];

    const centenas = [
        '',
        'Ciento',
        'Doscientos',
        'Trescientos',
        'Cuatrocientos',
        'Quinientos',
        'Seiscientos',
        'Setecientos',
        'Ochocientos',
        'Novecientos'
    ];


    if (numero === 0) return 'cero';

    if (numero === 100) return 'cien';


    function convertir(n) {

        let texto = '';

        if (n > 100) {
            texto += centenas[Math.floor(n / 100)] + ' ';
            n = n % 100;
        } else if (n == 100) {
            texto += 'Cien ';
        }

        if (n >= 10 && n < 20) {

            texto += especiales[n - 10];

            return texto;

        }
        if (n >= 20) {

            // 21 AL 29
            if (n >= 21 && n <= 29) {

                const veinti = [
                    '',
                    'Veintiuno',
                    'Veintidós',
                    'Veintitrés',
                    'Veinticuatro',
                    'Veinticinco',
                    'Veintiséis',
                    'Veintisiete',
                    'Veintiocho',
                    'Veintinueve'
                ];

                texto += veinti[n - 20];

            } else {

                texto += decenas[Math.floor(n / 10)];

                if (n % 10 > 0) {

                    texto += ' y ' + unidades[n % 10];

                }

            }

        } else {

            texto += unidades[n];

        }

        return texto;

    }


    if (numero < 1000) {

        return convertir(numero);

    }

    if (numero < 1000000) {

        let miles = Math.floor(numero / 1000);
        let resto = numero % 1000;

        let textoMiles = '';

        if (miles === 1) {

            textoMiles = 'mil';

        } else {

            textoMiles = convertir(miles) + ' mil';

        }

        return textoMiles + ' ' + convertir(resto);

    }

    return numero;

}