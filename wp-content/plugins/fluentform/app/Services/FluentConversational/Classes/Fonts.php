<?php

namespace FluentForm\App\Services\FluentConversational\Classes;

class Fonts
{
    public static function getFonts()
    {
        return [
            'system' => static::getSystemFonts(),
            'google' => static::getGoogleFonts(),
        ];
    }

    public static function getAllFonts()
    {
        return array_merge(static::getSystemFonts(), static::getGoogleFonts());
    }

    public static function getSystemFonts()
    {
        return [
            'system-ui' => [
                'fallback' => '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif',
                'weights'  => [
                    '300',
                    '400',
                    '700',
                ],
            ],
            'Helvetica' => [
                'fallback' => 'Verdana, Arial, sans-serif',
                'weights'  => [
                    '300',
                    '400',
                    '700',
                ],
            ],
            'Verdana' => [
                'fallback' => 'Helvetica, Arial, sans-serif',
                'weights'  => [
                    '300',
                    '400',
                    '700',
                ],
            ],
            'Arial' => [
                'fallback' => 'Helvetica, Verdana, sans-serif',
                'weights'  => ['300', '400', '700', ],
            ],
            'Times' => [
                'fallback' => 'Georgia, serif',
                'weights'  => [
                    '300',
                    '400',
                    '700',
                ],
            ],
            'Georgia' => [
                'fallback' => 'Times, serif',
                'weights'  => [
                    '300',
                    '400',
                    '700',
                ],
            ],
            'Courier' => [
                'fallback' => 'monospace',
                'weights'  => [
                    '300',
                    '400',
                    '700',
                ],
            ],
        ];
    }

    public static function getGoogleFonts()
    {
        return [
            'ABeeZee' => [
                'variants' => ['regular', 'italic'],
                'category' => 'sans-serif',
            ],
            'Abel' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Abhaya Libre' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'serif',
            ],
            'Abril Fatface' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Aclonica' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Acme' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Actor' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Adamina' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Advent Pro' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Aguafina Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Akaya Kanadaka' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Akaya Telivigala' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Akronim' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Aladin' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Alata' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Alatsi' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Aldrich' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Alef' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Alegreya' => [
                'variants' => ['regular', '500', '600', '700', '800', '900', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Alegreya SC' => [
                'variants' => ['regular', 'italic', '500', '500italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Alegreya Sans' => [
                'variants' => ['100', '100italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Alegreya Sans SC' => [
                'variants' => ['100', '100italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Aleo' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Alex Brush' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Alfa Slab One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Alice' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Alike' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Alike Angular' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Allan' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Allerta' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Allerta Stencil' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Allura' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Almarai' => [
                'variants' => ['300', 'regular', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Almendra' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Almendra Display' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Almendra SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Amarante' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Amaranth' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Amatic SC' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Amethysta' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Amiko' => [
                'variants' => ['regular', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Amiri' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Amita' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Anaheim' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Andada' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Andika' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Andika New Basic' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Angkor' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Annie Use Your Telescope' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Anonymous Pro' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'Antic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Antic Didone' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Antic Slab' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Anton' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Antonio' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Arapey' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Arbutus' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Arbutus Slab' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Architects Daughter' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Archivo' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Archivo Black' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Archivo Narrow' => [
                'variants' => ['regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Aref Ruqaa' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Arima Madurai' => [
                'variants' => ['100', '200', '300', 'regular', '500', '700', '800', '900'],
                'category' => 'display',
            ],
            'Arimo' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'sans-serif',
            ],
            'Arizonia' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Armata' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Arsenal' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Artifika' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Arvo' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Arya' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Asap' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'sans-serif',
            ],
            'Asap Condensed' => [
                'variants' => ['regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Asar' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Asset' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Assistant' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Astloch' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Asul' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Athiti' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Atma' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'display',
            ],
            'Atomic Age' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Aubrey' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Audiowide' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Autour One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Average' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Average Sans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Averia Gruesa Libre' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Averia Libre' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Averia Sans Libre' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Averia Serif Libre' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'B612' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'B612 Mono' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'Bad Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Bahiana' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bahianita' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bai Jamjuree' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Ballet' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Baloo 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Bhai 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Bhaina 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Chettan 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Da 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Paaji 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Tamma 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Tammudu 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Baloo Thambi 2' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Balsamiq Sans' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Balthazar' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Bangers' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Barlow' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Barlow Condensed' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Barlow Semi Condensed' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Barriecito' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Barrio' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Basic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Baskervville' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Battambang' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Baumans' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bayon' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Be Vietnam' => [
                'variants' => ['100', '100italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'sans-serif',
            ],
            'Bebas Neue' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Belgrano' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Bellefair' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Belleza' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Bellota' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Bellota Text' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'BenchNine' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Benne' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Bentham' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Berkshire Swash' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Beth Ellen' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Bevan' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Big Shoulders Display' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Big Shoulders Inline Display' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Big Shoulders Inline Text' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Big Shoulders Stencil Display' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Big Shoulders Stencil Text' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Big Shoulders Text' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Bigelow Rules' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bigshot One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bilbo' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Bilbo Swash Caps' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'BioRhyme' => [
                'variants' => ['200', '300', 'regular', '700', '800'],
                'category' => 'serif',
            ],
            'BioRhyme Expanded' => [
                'variants' => ['200', '300', 'regular', '700', '800'],
                'category' => 'serif',
            ],
            'Biryani' => [
                'variants' => ['200', '300', 'regular', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Bitter' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Black And White Picture' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Black Han Sans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Black Ops One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Blinker' => [
                'variants' => ['100', '200', '300', 'regular', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Bodoni Moda' => [
                'variants' => ['regular', '500', '600', '700', '800', '900', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Bokor' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bonbon' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Boogaloo' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bowlby One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bowlby One SC' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Brawler' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Bree Serif' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Brygada 1918' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'serif',
            ],
            'Bubblegum Sans' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bubbler One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Buda' => [
                'variants' => ['300'],
                'category' => 'display',
            ],
            'Buenard' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Bungee' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bungee Hairline' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bungee Inline' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bungee Outline' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Bungee Shade' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Butcherman' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Butterfly Kids' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Cabin' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'sans-serif',
            ],
            'Cabin Condensed' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Cabin Sketch' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Caesar Dressing' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Cagliostro' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Cairo' => [
                'variants' => ['200', '300', 'regular', '600', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Caladea' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Calistoga' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Calligraffitti' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Cambay' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Cambo' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Candal' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Cantarell' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Cantata One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Cantora One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Capriola' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Cardo' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'serif',
            ],
            'Carme' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Carrois Gothic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Carrois Gothic SC' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Carter One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Castoro' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Catamaran' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Caudex' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Caveat' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'handwriting',
            ],
            'Caveat Brush' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Cedarville Cursive' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Ceviche One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Chakra Petch' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Changa' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Changa One' => [
                'variants' => ['regular', 'italic'],
                'category' => 'display',
            ],
            'Chango' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Charm' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Charmonman' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Chathura' => [
                'variants' => ['100', '300', 'regular', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Chau Philomene One' => [
                'variants' => ['regular', 'italic'],
                'category' => 'sans-serif',
            ],
            'Chela One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Chelsea Market' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Chenla' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Cherry Cream Soda' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Cherry Swash' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Chewy' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Chicle' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Chilanka' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Chivo' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Chonburi' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Cinzel' => [
                'variants' => ['regular', '500', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Cinzel Decorative' => [
                'variants' => ['regular', '700', '900'],
                'category' => 'display',
            ],
            'Clicker Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Coda' => [
                'variants' => ['regular', '800'],
                'category' => 'display',
            ],
            'Coda Caption' => [
                'variants' => ['800'],
                'category' => 'sans-serif',
            ],
            'Codystar' => [
                'variants' => ['300', 'regular'],
                'category' => 'display',
            ],
            'Coiny' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Combo' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Comfortaa' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'display',
            ],
            'Comic Neue' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'handwriting',
            ],
            'Coming Soon' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Commissioner' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Concert One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Condiment' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Content' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Contrail One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Convergence' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Cookie' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Copse' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Corben' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Cormorant' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Cormorant Garamond' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Cormorant Infant' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Cormorant SC' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Cormorant Unicase' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Cormorant Upright' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Courgette' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Courier Prime' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'Cousine' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'Coustard' => [
                'variants' => ['regular', '900'],
                'category' => 'serif',
            ],
            'Covered By Your Grace' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Crafty Girls' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Creepster' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Crete Round' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Crimson Pro' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800', '900', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Crimson Text' => [
                'variants' => ['regular', 'italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Croissant One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Crushed' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Cuprum' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'sans-serif',
            ],
            'Cute Font' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Cutive' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Cutive Mono' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'DM Mono' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic'],
                'category' => 'monospace',
            ],
            'DM Sans' => [
                'variants' => ['regular', 'italic', '500', '500italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'DM Serif Display' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'DM Serif Text' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Damion' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Dancing Script' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'handwriting',
            ],
            'Dangrek' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Darker Grotesque' => [
                'variants' => ['300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'David Libre' => [
                'variants' => ['regular', '500', '700'],
                'category' => 'serif',
            ],
            'Dawning of a New Day' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Days One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Dekko' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Dela Gothic One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Delius' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Delius Swash Caps' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Delius Unicase' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Della Respira' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Denk One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Devonshire' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Dhurjati' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Didact Gothic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Diplomata' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Diplomata SC' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Do Hyeon' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Dokdo' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Domine' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Donegal One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Doppio One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Dorsa' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Dosis' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'DotGothic16' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Dr Sugiyama' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Duru Sans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Dynalight' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'EB Garamond' => [
                'variants' => ['regular', '500', '600', '700', '800', 'italic', '500italic', '600italic', '700italic', '800italic'],
                'category' => 'serif',
            ],
            'Eagle Lake' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'East Sea Dokdo' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Eater' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Economica' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Eczar' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'serif',
            ],
            'El Messiri' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Electrolize' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Elsie' => [
                'variants' => ['regular', '900'],
                'category' => 'display',
            ],
            'Elsie Swash Caps' => [
                'variants' => ['regular', '900'],
                'category' => 'display',
            ],
            'Emblema One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Emilys Candy' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Encode Sans' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Encode Sans Condensed' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Encode Sans Expanded' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Encode Sans Semi Condensed' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Encode Sans Semi Expanded' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Engagement' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Englebert' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Enriqueta' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Epilogue' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Erica One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Esteban' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Euphoria Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Ewert' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Exo' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Exo 2' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Expletus Sans' => [
                'variants' => ['regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Fahkwang' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Fanwood Text' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Farro' => [
                'variants' => ['300', 'regular', '500', '700'],
                'category' => 'sans-serif',
            ],
            'Farsan' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fascinate' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fascinate Inline' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Faster One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fasthand' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Fauna One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Faustina' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'serif',
            ],
            'Federant' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Federo' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Felipa' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Fenix' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Finger Paint' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fira Code' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'monospace',
            ],
            'Fira Mono' => [
                'variants' => ['regular', '500', '700'],
                'category' => 'monospace',
            ],
            'Fira Sans' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Fira Sans Condensed' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Fira Sans Extra Condensed' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Fjalla One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Fjord One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Flamenco' => [
                'variants' => ['300', 'regular'],
                'category' => 'display',
            ],
            'Flavors' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fondamento' => [
                'variants' => ['regular', 'italic'],
                'category' => 'handwriting',
            ],
            'Fontdiner Swanky' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Forum' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Francois One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Frank Ruhl Libre' => [
                'variants' => ['300', 'regular', '500', '700', '900'],
                'category' => 'serif',
            ],
            'Fraunces' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Freckle Face' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fredericka the Great' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fredoka One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Freehand' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fresca' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Frijole' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fruktur' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Fugaz One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'GFS Didot' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'GFS Neohellenic' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Gabriela' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Gaegu' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'handwriting',
            ],
            'Gafata' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Galada' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Galdeano' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Galindo' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Gamja Flower' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Gayathri' => [
                'variants' => ['100', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Gelasio' => [
                'variants' => ['regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Gentium Basic' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Gentium Book Basic' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Geo' => [
                'variants' => ['regular', 'italic'],
                'category' => 'sans-serif',
            ],
            'Geostar' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Geostar Fill' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Germania One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Gidugu' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Gilda Display' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Girassol' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Give You Glory' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Glass Antiqua' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Glegoo' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Gloria Hallelujah' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Goblin One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Gochi Hand' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Goldman' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Gorditas' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Gothic A1' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Gotu' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Goudy Bookletter 1911' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Graduate' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Grand Hotel' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Grandstander' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'display',
            ],
            'Gravitas One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Great Vibes' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Grenze' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Grenze Gotisch' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Griffy' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Gruppo' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Gudea' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'sans-serif',
            ],
            'Gugi' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Gupter' => [
                'variants' => ['regular', '500', '700'],
                'category' => 'serif',
            ],
            'Gurajada' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Habibi' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Hachi Maru Pop' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Halant' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Hammersmith One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Hanalei' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Hanalei Fill' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Handlee' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Hanuman' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Happy Monkey' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Harmattan' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Headland One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Heebo' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Henny Penny' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Hepta Slab' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Herr Von Muellerhoff' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Hi Melody' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Hind' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Hind Guntur' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Hind Madurai' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Hind Siliguri' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Hind Vadodara' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Holtwood One SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Homemade Apple' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Homenaje' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'IBM Plex Mono' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'IBM Plex Sans' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'IBM Plex Sans Condensed' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'IBM Plex Serif' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'IM Fell DW Pica' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'IM Fell DW Pica SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'IM Fell Double Pica' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'IM Fell Double Pica SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'IM Fell English' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'IM Fell English SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'IM Fell French Canon' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'IM Fell French Canon SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'IM Fell Great Primer' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'IM Fell Great Primer SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Ibarra Real Nova' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'serif',
            ],
            'Iceberg' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Iceland' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Imbue' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Imprima' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Inconsolata' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'monospace',
            ],
            'Inder' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Indie Flower' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Inika' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Inknut Antiqua' => [
                'variants' => ['300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Inria Sans' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Inria Serif' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Inter' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Irish Grover' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Istok Web' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Italiana' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Italianno' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Itim' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Jacques Francois' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Jacques Francois Shadow' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Jaldi' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'JetBrains Mono' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic'],
                'category' => 'monospace',
            ],
            'Jim Nightshade' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Jockey One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Jolly Lodger' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Jomhuria' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Jomolhari' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Josefin Sans' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'sans-serif',
            ],
            'Josefin Slab' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'serif',
            ],
            'Jost' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Joti One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Jua' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Judson' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'serif',
            ],
            'Julee' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Julius Sans One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Junge' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Jura' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Just Another Hand' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Just Me Again Down Here' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'K2D' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'sans-serif',
            ],
            'Kadwa' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Kalam' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'handwriting',
            ],
            'Kameron' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Kanit' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Kantumruy' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Karantina' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'display',
            ],
            'Karla' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic'],
                'category' => 'sans-serif',
            ],
            'Karma' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Katibeh' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kaushan Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Kavivanar' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Kavoon' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kdam Thmor' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Keania One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kelly Slab' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kenia' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Khand' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Khmer' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Khula' => [
                'variants' => ['300', 'regular', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Kirang Haerang' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kite One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Kiwi Maru' => [
                'variants' => ['300', 'regular', '500'],
                'category' => 'serif',
            ],
            'Knewave' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'KoHo' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Kodchasan' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Kosugi' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Kosugi Maru' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Kotta One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Koulen' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kranky' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kreon' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Kristi' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Krona One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Krub' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Kufam' => [
                'variants' => ['regular', '500', '600', '700', '800', '900', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'display',
            ],
            'Kulim Park' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Kumar One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kumar One Outline' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Kumbh Sans' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Kurale' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'La Belle Aurore' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Lacquer' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Laila' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Lakki Reddy' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Lalezar' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Lancelot' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Langar' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Lateef' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Lato' => [
                'variants' => ['100', '100italic', '300', '300italic', 'regular', 'italic', '700', '700italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'League Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Leckerli One' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Ledger' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Lekton' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'sans-serif',
            ],
            'Lemon' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Lemonada' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'display',
            ],
            'Lexend' => [
                'variants' => ['100', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Lexend Deca' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Lexend Exa' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Lexend Giga' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Lexend Mega' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Lexend Peta' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Lexend Tera' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Lexend Zetta' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Libre Barcode 128' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Barcode 128 Text' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Barcode 39' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Barcode 39 Extended' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Barcode 39 Extended Text' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Barcode 39 Text' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Barcode EAN13 Text' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Libre Baskerville' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'serif',
            ],
            'Libre Caslon Display' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Libre Caslon Text' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'serif',
            ],
            'Libre Franklin' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Life Savers' => [
                'variants' => ['regular', '700', '800'],
                'category' => 'display',
            ],
            'Lilita One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Lily Script One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Limelight' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Linden Hill' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Literata' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800', '900', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Liu Jian Mao Cao' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Livvic' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Lobster' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Lobster Two' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Londrina Outline' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Londrina Shadow' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Londrina Sketch' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Londrina Solid' => [
                'variants' => ['100', '300', 'regular', '900'],
                'category' => 'display',
            ],
            'Long Cang' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Lora' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'serif',
            ],
            'Love Ya Like A Sister' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Loved by the King' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Lovers Quarrel' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Luckiest Guy' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Lusitana' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Lustria' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'M PLUS 1p' => [
                'variants' => ['100', '300', 'regular', '500', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'M PLUS Rounded 1c' => [
                'variants' => ['100', '300', 'regular', '500', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Ma Shan Zheng' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Macondo' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Macondo Swash Caps' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Mada' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Magra' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Maiden Orange' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Maitree' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Major Mono Display' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'Mako' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Mali' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'handwriting',
            ],
            'Mallanna' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Mandali' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Manjari' => [
                'variants' => ['100', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Manrope' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Mansalva' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Manuale' => [
                'variants' => ['regular', '500', '600', '700', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'serif',
            ],
            'Marcellus' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Marcellus SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Marck Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Margarine' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Markazi Text' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Marko One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Marmelad' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Martel' => [
                'variants' => ['200', '300', 'regular', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Martel Sans' => [
                'variants' => ['200', '300', 'regular', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Marvel' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Mate' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Mate SC' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Maven Pro' => [
                'variants' => ['regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'McLaren' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Meddon' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'MedievalSharp' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Medula One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Meera Inimai' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Megrim' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Meie Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Merienda' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Merienda One' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Merriweather' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Merriweather Sans' => [
                'variants' => ['300', 'regular', '500', '600', '700', '800', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic'],
                'category' => 'sans-serif',
            ],
            'Metal' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Metal Mania' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Metamorphous' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Metrophobic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Michroma' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Milonga' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Miltonian' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Miltonian Tattoo' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Mina' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Miniver' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Miriam Libre' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Mirza' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'display',
            ],
            'Miss Fajardose' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Mitr' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Modak' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Modern Antiqua' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Mogra' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Molengo' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Molle' => [
                'variants' => ['italic'],
                'category' => 'handwriting',
            ],
            'Monda' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Monofett' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Monoton' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Monsieur La Doulaise' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Montaga' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Montez' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Montserrat' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Montserrat Alternates' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Montserrat Subrayada' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Moul' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Moulpali' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Mountains of Christmas' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Mouse Memoirs' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Mr Bedfort' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Mr Dafoe' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Mr De Haviland' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Mrs Saint Delafield' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Mrs Sheppards' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Mukta' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Mukta Mahee' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Mukta Malar' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Mukta Vaani' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Mulish' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800', '900', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'MuseoModerno' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Mystery Quest' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'NTR' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Nanum Brush Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Nanum Gothic' => [
                'variants' => ['regular', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Nanum Gothic Coding' => [
                'variants' => ['regular', '700'],
                'category' => 'monospace',
            ],
            'Nanum Myeongjo' => [
                'variants' => ['regular', '700', '800'],
                'category' => 'serif',
            ],
            'Nanum Pen Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Nerko One' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Neucha' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Neuton' => [
                'variants' => ['200', '300', 'regular', 'italic', '700', '800'],
                'category' => 'serif',
            ],
            'New Rocker' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'New Tegomin' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'News Cycle' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Newsreader' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic'],
                'category' => 'serif',
            ],
            'Niconne' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Niramit' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Nixie One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nobile' => [
                'variants' => ['regular', 'italic', '500', '500italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Nokora' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Norican' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Nosifer' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Notable' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Nothing You Could Do' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Noticia Text' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Noto Sans' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Noto Sans HK' => [
                'variants' => ['100', '300', 'regular', '500', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Noto Sans JP' => [
                'variants' => ['100', '300', 'regular', '500', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Noto Sans KR' => [
                'variants' => ['100', '300', 'regular', '500', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Noto Sans SC' => [
                'variants' => ['100', '300', 'regular', '500', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Noto Sans TC' => [
                'variants' => ['100', '300', 'regular', '500', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Noto Serif' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Noto Serif JP' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '900'],
                'category' => 'serif',
            ],
            'Noto Serif KR' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '900'],
                'category' => 'serif',
            ],
            'Noto Serif SC' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '900'],
                'category' => 'serif',
            ],
            'Noto Serif TC' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '900'],
                'category' => 'serif',
            ],
            'Nova Cut' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nova Flat' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nova Mono' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'Nova Oval' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nova Round' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nova Script' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nova Slim' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Nova Square' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Numans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Nunito' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Nunito Sans' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Odibee Sans' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Odor Mean Chey' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Offside' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Oi' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Old Standard TT' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'serif',
            ],
            'Oldenburg' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Oleo Script' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Oleo Script Swash Caps' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Open Sans' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'sans-serif',
            ],
            'Open Sans Condensed' => [
                'variants' => ['300', '300italic', '700'],
                'category' => 'sans-serif',
            ],
            'Oranienbaum' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Orbitron' => [
                'variants' => ['regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Oregano' => [
                'variants' => ['regular', 'italic'],
                'category' => 'display',
            ],
            'Orelega One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Orienta' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Original Surfer' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Oswald' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Over the Rainbow' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Overlock' => [
                'variants' => ['regular', 'italic', '700', '700italic', '900', '900italic'],
                'category' => 'display',
            ],
            'Overlock SC' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Overpass' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Overpass Mono' => [
                'variants' => ['300', 'regular', '600', '700'],
                'category' => 'monospace',
            ],
            'Ovo' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Oxanium' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'display',
            ],
            'Oxygen' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Oxygen Mono' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'PT Mono' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'PT Sans' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'PT Sans Caption' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'PT Sans Narrow' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'PT Serif' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'PT Serif Caption' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Pacifico' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Padauk' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Palanquin' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Palanquin Dark' => [
                'variants' => ['regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Pangolin' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Paprika' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Parisienne' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Passero One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Passion One' => [
                'variants' => ['regular', '700', '900'],
                'category' => 'display',
            ],
            'Pathway Gothic One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Patrick Hand' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Patrick Hand SC' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Pattaya' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Patua One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Pavanam' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Paytone One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Peddana' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Peralta' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Permanent Marker' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Petit Formal Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Petrona' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Philosopher' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Piazzolla' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Piedra' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Pinyon Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Pirata One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Plaster' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Play' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Playball' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Playfair Display' => [
                'variants' => ['regular', '500', '600', '700', '800', '900', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Playfair Display SC' => [
                'variants' => ['regular', 'italic', '700', '700italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Podkova' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'serif',
            ],
            'Poiret One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Poller One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Poly' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Pompiere' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Pontano Sans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Poor Story' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Poppins' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Port Lligat Sans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Port Lligat Slab' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Potta One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Pragati Narrow' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Prata' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Preahvihear' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Press Start 2P' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Pridi' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Princess Sofia' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Prociono' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Prompt' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Prosto One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Proza Libre' => [
                'variants' => ['regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'sans-serif',
            ],
            'Public Sans' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Puritan' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Purple Purse' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Quando' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Quantico' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Quattrocento' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Quattrocento Sans' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Questrial' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Quicksand' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Quintessential' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Qwigley' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Racing Sans One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Radley' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Rajdhani' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Rakkas' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Raleway' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Raleway Dots' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Ramabhadra' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Ramaraja' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Rambla' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Rammetto One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Ranchers' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Rancho' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Ranga' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Rasa' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Rationale' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Ravi Prakash' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Recursive' => [
                'variants' => ['300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Red Hat Display' => [
                'variants' => ['regular', 'italic', '500', '500italic', '700', '700italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Red Hat Text' => [
                'variants' => ['regular', 'italic', '500', '500italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Red Rose' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'display',
            ],
            'Redressed' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Reem Kufi' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Reenie Beanie' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Reggae One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Revalia' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Rhodium Libre' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Ribeye' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Ribeye Marrow' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Righteous' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Risque' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Roboto' => [
                'variants' => ['100', '100italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '700', '700italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Roboto Condensed' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Roboto Mono' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'monospace',
            ],
            'Roboto Slab' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Rochester' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Rock Salt' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'RocknRoll One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Rokkitt' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'serif',
            ],
            'Romanesco' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Ropa Sans' => [
                'variants' => ['regular', 'italic'],
                'category' => 'sans-serif',
            ],
            'Rosario' => [
                'variants' => ['300', 'regular', '500', '600', '700', '300italic', 'italic', '500italic', '600italic', '700italic'],
                'category' => 'sans-serif',
            ],
            'Rosarivo' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Rouge Script' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Rowdies' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'display',
            ],
            'Rozha One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Rubik' => [
                'variants' => ['300', 'regular', '500', '600', '700', '800', '900', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Rubik Mono One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Ruda' => [
                'variants' => ['regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Rufina' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Ruge Boogie' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Ruluko' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Rum Raisin' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Ruslan Display' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Russo One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Ruthie' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Rye' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sacramento' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Sahitya' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Sail' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Saira' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Saira Condensed' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Saira Extra Condensed' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Saira Semi Condensed' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Saira Stencil One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Salsa' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sanchez' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Sancreek' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sansita' => [
                'variants' => ['regular', 'italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Sansita Swashed' => [
                'variants' => ['300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'display',
            ],
            'Sarabun' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'sans-serif',
            ],
            'Sarala' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Sarina' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sarpanch' => [
                'variants' => ['regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Satisfy' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Sawarabi Gothic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Sawarabi Mincho' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Scada' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Scheherazade' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Schoolbell' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Scope One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Seaweed Script' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Secular One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Sedgwick Ave' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Sedgwick Ave Display' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Sen' => [
                'variants' => ['regular', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Sevillana' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Seymour One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Shadows Into Light' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Shadows Into Light Two' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Shanti' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Share' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'display',
            ],
            'Share Tech' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Share Tech Mono' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'Shippori Mincho' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'serif',
            ],
            'Shippori Mincho B1' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'serif',
            ],
            'Shojumaru' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Short Stack' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Shrikhand' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Siemreap' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sigmar One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Signika' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Signika Negative' => [
                'variants' => ['300', 'regular', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Simonetta' => [
                'variants' => ['regular', 'italic', '900', '900italic'],
                'category' => 'display',
            ],
            'Single Day' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sintony' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Sirin Stencil' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Six Caps' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Skranji' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Slabo 13px' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Slabo 27px' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Slackey' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Smokum' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Smythe' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sniglet' => [
                'variants' => ['regular', '800'],
                'category' => 'display',
            ],
            'Snippet' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Snowburst One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sofadi One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sofia' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Solway' => [
                'variants' => ['300', 'regular', '500', '700', '800'],
                'category' => 'serif',
            ],
            'Song Myung' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Sonsie One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sora' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Sorts Mill Goudy' => [
                'variants' => ['regular', 'italic'],
                'category' => 'serif',
            ],
            'Source Code Pro' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '900', '900italic'],
                'category' => 'monospace',
            ],
            'Source Sans Pro' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Source Serif Pro' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Space Grotesk' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Space Mono' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'Spartan' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Special Elite' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Spectral' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'serif',
            ],
            'Spectral SC' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                'category' => 'serif',
            ],
            'Spicy Rice' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Spinnaker' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Spirax' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Squada One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sree Krushnadevaraya' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Sriracha' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Srisakdi' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Staatliches' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Stalemate' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Stalinist One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Stardos Stencil' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Stick' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Stint Ultra Condensed' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Stint Ultra Expanded' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Stoke' => [
                'variants' => ['300', 'regular'],
                'category' => 'serif',
            ],
            'Strait' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Stylish' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Sue Ellen Francisco' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Suez One' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Sulphur Point' => [
                'variants' => ['300', 'regular', '700'],
                'category' => 'sans-serif',
            ],
            'Sumana' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Sunflower' => [
                'variants' => ['300', '500', '700'],
                'category' => 'sans-serif',
            ],
            'Sunshiney' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Supermercado One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Sura' => [
                'variants' => ['regular', '700'],
                'category' => 'serif',
            ],
            'Suranna' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Suravaram' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Suwannaphum' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Swanky and Moo Moo' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Syncopate' => [
                'variants' => ['regular', '700'],
                'category' => 'sans-serif',
            ],
            'Syne' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Syne Mono' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'Syne Tactile' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Tajawal' => [
                'variants' => ['200', '300', 'regular', '500', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Tangerine' => [
                'variants' => ['regular', '700'],
                'category' => 'handwriting',
            ],
            'Taprom' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Tauri' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Taviraj' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Teko' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Telex' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Tenali Ramakrishna' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Tenor Sans' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Text Me One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Texturina' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Thasadith' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'The Girl Next Door' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Tienne' => [
                'variants' => ['regular', '700', '900'],
                'category' => 'serif',
            ],
            'Tillana' => [
                'variants' => ['regular', '500', '600', '700', '800'],
                'category' => 'handwriting',
            ],
            'Timmana' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Tinos' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Titan One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Titillium Web' => [
                'variants' => ['200', '200italic', '300', '300italic', 'regular', 'italic', '600', '600italic', '700', '700italic', '900'],
                'category' => 'sans-serif',
            ],
            'Tomorrow' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'sans-serif',
            ],
            'Trade Winds' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Train One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Trirong' => [
                'variants' => ['100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic'],
                'category' => 'serif',
            ],
            'Trispace' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800'],
                'category' => 'sans-serif',
            ],
            'Trocchi' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Trochut' => [
                'variants' => ['regular', 'italic', '700'],
                'category' => 'display',
            ],
            'Truculenta' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900'],
                'category' => 'sans-serif',
            ],
            'Trykker' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Tulpen One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Turret Road' => [
                'variants' => ['200', '300', 'regular', '500', '700', '800'],
                'category' => 'display',
            ],
            'Ubuntu' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic', '700', '700italic'],
                'category' => 'sans-serif',
            ],
            'Ubuntu Condensed' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Ubuntu Mono' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'monospace',
            ],
            'Ultra' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Uncial Antiqua' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Underdog' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Unica One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'UnifrakturCook' => [
                'variants' => ['700'],
                'category' => 'display',
            ],
            'UnifrakturMaguntia' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Unkempt' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
            'Unlock' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Unna' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'VT323' => [
                'variants' => ['regular'],
                'category' => 'monospace',
            ],
            'Vampiro One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Varela' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Varela Round' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Varta' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Vast Shadow' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Vesper Libre' => [
                'variants' => ['regular', '500', '700', '900'],
                'category' => 'serif',
            ],
            'Viaoda Libre' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Vibes' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Vibur' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Vidaloka' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Viga' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Voces' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Volkhov' => [
                'variants' => ['regular', 'italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Vollkorn' => [
                'variants' => ['regular', '500', '600', '700', '800', '900', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'serif',
            ],
            'Vollkorn SC' => [
                'variants' => ['regular', '600', '700', '900'],
                'category' => 'serif',
            ],
            'Voltaire' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Waiting for the Sunrise' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Wallpoet' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Walter Turncoat' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Warnes' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Wellfleet' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Wendy One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Wire One' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'Work Sans' => [
                'variants' => ['100', '200', '300', 'regular', '500', '600', '700', '800', '900', '100italic', '200italic', '300italic', 'italic', '500italic', '600italic', '700italic', '800italic', '900italic'],
                'category' => 'sans-serif',
            ],
            'Xanh Mono' => [
                'variants' => ['regular', 'italic'],
                'category' => 'monospace',
            ],
            'Yanone Kaffeesatz' => [
                'variants' => ['200', '300', 'regular', '500', '600', '700'],
                'category' => 'sans-serif',
            ],
            'Yantramanav' => [
                'variants' => ['100', '300', 'regular', '500', '700', '900'],
                'category' => 'sans-serif',
            ],
            'Yatra One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Yellowtail' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Yeon Sung' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Yeseva One' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Yesteryear' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Yrsa' => [
                'variants' => ['300', 'regular', '500', '600', '700'],
                'category' => 'serif',
            ],
            'Yusei Magic' => [
                'variants' => ['regular'],
                'category' => 'sans-serif',
            ],
            'ZCOOL KuaiLe' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'ZCOOL QingKe HuangYou' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'ZCOOL XiaoWei' => [
                'variants' => ['regular'],
                'category' => 'serif',
            ],
            'Zen Dots' => [
                'variants' => ['regular'],
                'category' => 'display',
            ],
            'Zeyada' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Zhi Mang Xing' => [
                'variants' => ['regular'],
                'category' => 'handwriting',
            ],
            'Zilla Slab' => [
                'variants' => ['300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic'],
                'category' => 'serif',
            ],
            'Zilla Slab Highlight' => [
                'variants' => ['regular', '700'],
                'category' => 'display',
            ],
        ];
    }
}
