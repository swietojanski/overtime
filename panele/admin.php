<?php if($_SESSION['permissions']==1){ //wpusc jezeli ma prawa admina?>
<h1> Panel administracyjny </h1>
<h2 class="podpowiedzi zaokraglij">Zarządzaj, dodawaj, edytuj, usuwaj...</h2>

<div class="flex-container">
        <ul class="flex-container">
            <a href="index.php?id=panele/dodaj/nadgodziny"><li class="flex-box dopelniajacy-1 zaokraglij">dodaj użytkownika</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box dopelniajacy-2 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box dopelniajacy-1 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box zlozony-3 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box triada-4 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box dopelniajacy-2 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box dopelniajacy-1 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box triada-2 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box dopelniajacy-1 zaokraglij">dodaj żołnierza</li></a>
            <a href="index.php?id=panele/dodaj/sluzby"><li class="flex-box dopelniajacy-2 zaokraglij">dodaj żołnierza</li></a>
        </ul>
    </div>
</div>
<?php


//przypisanie POST z formularza do zmiennych
$skrot = mysql_real_escape_string($_POST[skrot]);
$nazwa = mysql_real_escape_string($_POST[nazwa]);

}  else { //jezeli to nie admin powiadom go o tym
    echo "Czego tutaj szukasz? Nie masz wystarczających uprawnień!";
}
?>