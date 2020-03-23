<h4>Offerte binnen een uur vraag hem nu aan</h4>
<form class="form-horizontal" action="/mail/contact.php" role="form" method="POST">
    <div class="row control-group">
        <label>Naam</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="text" class="form-control" placeholder="naam" id="name" name="name">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>Straatnaam</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="straatnaam" class="form-control" placeholder="straatnaam" id="streetname" name="streetname">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>Postcode</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="postcode" class="form-control" placeholder="postcode" id="postalcode" name="postcode">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>Plaats</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="plaats" class="form-control" placeholder="plaats" id="place" name="place">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>Mobiel</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="mobiel" class="form-control" placeholder="mobiel" id="mobile" name="mobile">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>Bedrijfsnaam</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="bedrijfsnaam" class="form-control" placeholder="bedrijfsnaam" id="company" name="company">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>Telefoon</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="telefoon" class="form-control" placeholder="telefoon" id="phone" name="phone">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label>email</label>
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required data-validation-email-message="Vul een geldig email in" data-validation-required-message="Vul dit aub in">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <label>Vink hieronder het type klus aan waar het desbetreffende opdracht onder valt.</label>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="proposition[]" value="nieuwbouw">Nieuwbouw</label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="proposition[]" value="verbouw">Verbouw</label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="proposition[]" value="renovatie">Renovatie</label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="proposition[]" value="onderhoud">Onderhoud</label>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <textarea rows="5" class="form-control" placeholder="Probeer zo gedetailleerd mogelijk te omschrijven wat u door ons wilt laten realiseren" id="message" name="description"></textarea>
        </div>
    </div>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-lg btn-primary">Sturen</button>
        </div>
    </div>
</form>