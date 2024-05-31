<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberWizards Laager Registreerimine</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .comment-box {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Küberturbe laagrisse CyberWizards registreerimine</h2>
        <p>Käesoleva vormiga saate ennast registreerida 29.juulil – 3.augustil 2024.aastal Kehtnas toimuvasse 13-16 aastatele tüdrukutele mõeldud küberturbe laagrisse. Täpsemat infot laagri kohta leiate siit: <a href="https://www.ria.ee/cyberwizards-2024" target="_blank">https://www.ria.ee/cyberwizards-2024</a></p>
        <p>Kogume kontaktandmeid selleks, et edastada teile seoses laagriga olulist infot. Infot osalejate kohta kogume, et tagada osalejate heaolu laagri jooksul. Edastame andmeid ainult laagri toimumisega vahetult seotud isikutele ja ainult sel määral, mis on vajalik.</p>

        <form action="register.php"  method="post">
            <h4>Info osaleja kohta</h4>
            <div class="form-group">
                <label for="fullname">Osaleja täisnimi *</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="dob">Osaleja sünnikuupäev *</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="mobile">Osaleja telefoni number</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>
            <div class="form-group">
                <label for="email">Osaleja e-maili aadress</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Kas osaleja suudab suhelda igapäevastes olukordades inglise keeles? *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="englishSkill" id="englishSkillYes" value="yes" required onchange="toggleCommentBox('englishSkillYes', 'englishSkillComment')">
                    <label class="form-check-label" for="englishSkillYes">Jah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="englishSkill" id="englishSkillNo" value="no" required onchange="toggleCommentBox('englishSkillYes', 'englishSkillComment')">
                    <label class="form-check-label" for="englishSkillNo">Ei</label>
                </div>
                <div class="form-group comment-box" id="englishSkillCommentBox">
                    <label for="englishSkillComment">Kommenteerige soovi korral oma valikut siin:</label>
                    <textarea class="form-control" id="englishSkillComment" name="englishSkillComment" rows="2"></textarea>
                </div>
            </div>

            <h4>Vanema või eestkostja kontaktandmed</h4>
            <div class="form-group">
                <label for="parentfullname">Vanema või eestkostja täisnimi *</label>
                <input type="text" class="form-control" id="parentfullname" name="parentfullname" required>
            </div>
            <div class="form-group">
                <label for="parentemail">Vanema või eestkostja e-maili aadress *</label>
                <input type="email" class="form-control" id="parentemail" name="parentemail" required>
            </div>
            <div class="form-group">
                <label for="parentmobile">Vanema või eestkostja telefoni number *</label>
                <input type="text" class="form-control" id="parentmobile" name="parentmobile" required>
            </div>

            <h4>Täiendav info osaleja kohta</h4>
            <div class="form-group">
                <label>Kas osaleja põeb kroonilisi haigusi? *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="chronicDiseases" id="chronicDiseasesYes" value="yes" required onchange="toggleCommentBox('chronicDiseasesYes', 'diseaseDetails')">
                    <label class="form-check-label" for="chronicDiseasesYes">Jah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="chronicDiseases" id="chronicDiseasesNo" value="no" required onchange="toggleCommentBox('chronicDiseasesYes', 'diseaseDetails')">
                    <label class="form-check-label" for="chronicDiseasesNo">Ei</label>
                </div>
                <div class="form-group comment-box" id="diseaseDetailsBox">
                    <label for="diseaseDetails">Milliseid kroonilisi haigusi osaleja põeb?</label>
                    <textarea class="form-control" id="diseaseDetails" name="diseaseDetails" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label>Kas osaleja tarvitab regulaarselt ravimeid? *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="medication" id="medicationYes" value="yes" required onchange="toggleCommentBox('medicationYes', 'medicationDetails')">
                    <label class="form-check-label" for="medicationYes">Jah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="medication" id="medicationNo" value="no" required onchange="toggleCommentBox('medicationYes', 'medicationDetails')">
                    <label class="form-check-label" for="medicationNo">Ei</label>
                </div>
                <div class="form-group comment-box" id="medicationDetailsBox">
                    <label for="medicationDetails">Palun täpsustage milliseid ravimeid osaleja regulaarselt tarvitab ning mitu korda päevas. Kui osaleja vajab abi ravimite õigeaegse manustamise või ravimite manustamise vajaduse kontrollimiseks, siis palun ka see kirja panna.</label>
                    <textarea class="form-control" id="medicationDetails" name="medicationDetails" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label>Kas osaleja on allergiline allergeenide suhtes? *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="allergic" id="allergicYes" value="yes" required onchange="toggleCommentBox('allergicYes', 'allergicDetails')">
                    <label class="form-check-label" for="allergicYes">Jah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="allergic" id="allergicNo" value="no" required onchange="toggleCommentBox('allergicYes', 'allergicDetails')">
                    <label class="form-check-label" for="allergicNo">Ei</label>
                </div>
                <div class="form-group comment-box" id="allergicDetailsBox">
                    <label for="allergicDetails">Palun täpsustage millistele allergeenidele osaleja allergiline on? Kui on veel midagi, mida peaksime osaleja allergiate kohta teadma, siis palun täpsustage.</label>
                    <textarea class="form-control" id="allergicDetails" name="allergicDetails" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label>Kas osalejal on toitumispiiranguid? *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dietary" id="dietaryYes" value="yes" required onchange="toggleCommentBox('dietaryYes', 'dietaryDetails')">
                    <label class="form-check-label" for="dietaryYes">Jah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dietary" id="dietaryNo" value="no" required onchange="toggleCommentBox('dietaryYes', 'dietaryDetails')">
                    <label class="form-check-label" for="dietaryNo">Ei</label>
                </div>
                <div class="form-group comment-box" id="dietaryDetailsBox">
                    <label for="dietaryDetails">Palun täpsustage, millised toitumispiirangud osalejal on? Laagris koha peal selguvate toitumiserisustega ei pruugi meil olla enam võimalik arvestada.</label>
                    <textarea class="form-control" id="dietaryDetails" name="dietaryDetails" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label>Soovime ka sel aastal teha kõigile osalejatele laagrisärgid. Mis suurus särki osaleja tavaliselt kannab?</label>
                <select class="form-control" id="shirtsize" name="shirtsize" required>
                    <option value="XS">XS (särgi rinnaümbermõõt umbes 90cm)</option>
                    <option value="S">S (särgi rinnaümbermõõt 96cm)</option>
                    <option value="M">M (särgi rinnaümbermõõt 102 cm)</option>
                    <option value="L">L (särgi rinnaümbermõõt 108 cm)</option>
                    <option value="XL">XL (särgi rinnaümbermõõt 114 cm)</option>
                    <option value="XXL">XXL (särgi rinnaümbermõõt 120 cm)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Kui on veel midagi olulist, mida peaksime osaleja kohta teadma, siis palun kirjutage see siia. Samuti kui osaleja soovib tuba jagada mõne sõbrannaga, kes laagris osaleb, siis palun lisage ka see siia.</label>
                <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
            </div>

            <div class="alert alert-info" role="alert">
                Laager toimub avalikus ruumis ning laagris tehakse pilte ja videoid. Laagrit on plaanis kajastada meedias ja sotsiaalmeedias.
            </div>
            <button type="submit" class="btn btn-primary">Kinnita ankeet</button>
        </form>
        <p class="mt-3">Aitäh registreerimast. Saadame teile enne laagri toimumist täpsema info.</p>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            function toggleCommentBox(radioId, commentBoxId) {
                const radioButton = document.getElementById(radioId);
                const commentBox = document.getElementById(commentBoxId + 'Box');
                if (radioButton.checked && radioButton.value === 'yes') {
                    commentBox.style.display = 'block';
                } else {
                    commentBox.style.display = 'none';
                }
            }

            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.addEventListener('change', () => {
                    toggleCommentBox(radio.id, radio.name);
                });
            });
        </script>
    </div>
</body>
</html>
