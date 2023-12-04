
<?php
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "quiz_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

$intrebari = [
    ["Cine a fost primul președinte al Statelor Unite?", "George Washington", ""],
    ["Când a avut loc Revoluția Franceză?", "În secolul al XVIII-lea", ""],
    ["Care dintre următoarele evenimente a marcat sfârșitul celui de-al Doilea Război Mondial în Europa?", "Ziua D-Day", ""],
    ["Cine a fost liderul Uniunii Sovietice în timpul crizei rachetelor cubaneze?", "Nikita Hrușciov", ""],
    ["Care din următoarele figuri istorice este asociată cu Revoluția Industrială?", "Isaac Newton", ""],
    ["Cine a fost primul om care a pășit pe Lună?", "Buzz Aldrin", ""],
    ["Care dintre următoarele războaie a fost numit și \"Războiul de 100 de Ani\"?", "Războiul de 30 de Ani", ""],
    ["Care dintre aceste imperii a atins cea mai mare întindere teritorială?", "Imperiul Otoman", ""],
    ["Care a fost primul război mondial?", "1939 - 1945", ""],
    ["Cine a fost fondatorul dinastiei dinastiei Ming din China?", "Sun Yat-sen", ""],
    ["Care dintre următoarele personalități a condus un imperiu în America de Sud în secolul al XIX-lea?", "Hernán Cortés", ""],
    ["Care a fost primul război al independenței din America de Sud?", "Războiul de independență al Braziliei", ""],
    ["Care din următoarele țări a fost afectată de Revoluția Culturală condusă de Mao Zedong?", "Japonia", ""],
    ["Care dintre următoarele evenimente a marcat începutul Primului Război Mondial?", "Tratatul de la Versailles", ""],
    ["Cine a fost arhitectul principal al planului Marshall?", "George Marshall", ""],
    ["Care este cel mai lung fluviu din lume?", "Amazonul", ""],
    ["Care este cel mai mare ocean al lumii?", "Oceanul Indian", ""],
    ["Care dintre următoarele țări NU se află în America de Sud?", "Peru", ""],
    ["Care este cel mai înalt vârf de pe Pământ?", "Kilimanjaro", ""],
    ["Care este capitala Rusiei?", "Sankt Petersburg", ""],
    ["Care este cel mai mare continent din lume?", "America de Nord", ""],
    ["Care dintre următoarele țări se află în Peninsula Arabică?", "Iran", ""],
    ["Care este cel mai mare lac din lume în ceea ce privește suprafața sa?", "Lacul Victoria", ""],
    ["Care dintre următoarele orașe este situat în Africa?", "Nairobi", ""],
    ["Care este cel mai lung lanț muntos din lume?", "Munții Himalaya", ""],
    ["Care dintre următoarele țări NU se află în Europa?", "Islanda", ""],
    ["Care este capitala Japoniei?", "Kyoto", ""],
    ["Care este cea mai mare insulă din lume?", "Madagascar", ""],
    ["Care dintre următoarele țări se află în America Centrală?", "Colombia", ""],
    ["Care este cel mai mare deșert din lume?", "Deșertul Gobi", ""],
    ["Care este rezultatul adunării a 245 și 379?", "524", ""],
    ["Ce este radicalul pătrat al lui 144?", "12", ""],
    ["Care este rezultatul înmulțirii a 38 cu 17?", "514", ""],
    ["Care este valoarea lui π (pi) aproximativă la zecimale?", "3.16", ""],
    ["Care este rezultatul împărțirii lui 567 la 9?", "63", ""],
    ["Dacă un unghi este de 90 de grade, cum este numit acest tip de unghi?", "Unghi drept", ""],
    ["Care este rezultatul scăderii lui 543 din 987?", "444", ""],
    ["Dacă o pantă este exprimată ca raportul de 3/5, cât de mult înclinată este aceasta?", "50%", ""],
    ["Care este rezultatul adunării tuturor numerelor întregi de la 1 la 100?", "4950", ""],
    ["Dacă un pătrat are latura de 6 cm, care este aria sa?", "36 cm²", ""],
    ["Ce este opusul aditiv al lui -18?", "-18", ""],
    ["Care este rezultatul înmulțirii a 15 cu 20%?", "6", ""],
    ["Dacă o roată are 36 de dinți și se rotește de 4 ori, câte dinți vor fi trecuți?", "120", ""],
    ["Dacă un cub are o lungime de latură de 5 cm, care este volumul său?", "150 cm³", ""],
    ["Care dintre următoarele este un limbaj de programare orientat pe obiecte?", "CSS", ""],
    ["Ce este un algoritm?", "O metodă de criptare a datelor", ""],
    ["Care dintre următoarele este un sistem de operare open-source?", "Linux", ""],
    ["Ce este HTML în contextul informaticii?", "Un limbaj de stilizare a paginilor web", ""],
    ["Ce reprezintă acronimul \"URL\" în informatică?", "Universal Reference Link", ""],
    ["Ce face un software antivirus?", "Menține performanța sistemului de operare", ""],
    ["Ce reprezintă extensia de fișier \".docx\"?", "Fișier audio", ""],
    ["Ce este un browser web?", "Un software pentru crearea bazelor de date", ""],
    ["Care este scopul principal al unei baze de date?", "Criptarea informațiilor confidențiale", ""],
    ["Ce este \"cloud computing\" în informatică?", "Stocarea și accesul la date prin internet", ""],
    ["Ce este un \"firewall\" în contextul securității informatice?", "O metodă de criptare a informațiilor sensibile", ""],
    ["Ce este un \"bug\" în programare?", "Un program de tip malware", ""],
    ["Ce reprezintă acronimul \"HTTP\" în cadrul internetului?", "Hyperlink Text Transmission Protocol", ""],
    ["Care este principalul rol al unui sistem de operare într-un calculator?", "Gestionarea hardware-ului calculatorului", ""],
    ["Ce reprezintă conceptul de \"spam\" în contextul electronic?", "Trimiterea repetată a mesajelor nesolicitate", ""],
    ["Cine este considerat \"Regele Tenisului\"?", "Rafael Nadal", ""],
    ["Care este singurul club care a jucat în fiecare sezon al Premier League din Anglia de la înființarea acesteia în 1992?", "Liverpool", ""],
    ["Cine a câștigat cel mai mare număr de titluri în Formula 1?", "Lewis Hamilton", ""],
    ["Care este sportul principal al legendarului boxer Muhammad Ali?", "Fotbal american", ""],
    ["Cine a câștigat cele mai multe titluri de Grand Slam la tenis la simplu feminin?", "Steffi Graf", ""],
    ["Cine este cunoscut ca \"Regele Fotbalului\"?", "Cristiano Ronaldo", ""],
    ["Câți jucători sunt într-o echipă de fotbal în timpul unui meci standard?", "10", ""],
    ["Care este singurul turneu de tenis de Grand Slam care se joacă pe iarbă?", "Australian Open", ""],
    ["Cine a câștigat cele mai multe titluri de campion mondial în fotbal?", "Diego Maradona", ""],
    ["Cine a fost primul om care a alergat o milă în mai puțin de patru minute?", "Usain Bolt", ""],
    ["Care sportiv a fost supranumit \"Lightning Bolt\" și a dominat probele de sprint la Jocurile Olimpice?", "Jesse Owens", ""],
    ["Cine este considerat \"Regele Baschetului\"?", "Kobe Bryant", ""],

];

foreach ($intrebari as $intrebare) {
    $sql = "INSERT INTO intrebari (intrebare, raspuns_corect, domeniu) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $intrebare[0], $intrebare[1], $intrebare[2]);
    $stmt->execute();
}

echo "Întrebările au fost adăugate în baza de date.";

$conn->close();
?>
