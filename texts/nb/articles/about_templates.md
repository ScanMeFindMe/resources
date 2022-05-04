<h1>Hvordan legge til kantlinjer og bildetekster til QR-kodene</h1>

--- Abstract / Meta description ---

Lær hvordan du legger til rammer og bildetekster som gjør QR-koden din unik. Stil QR-koden din med en fengende handlingsfremmende oppfordring for å øke konverteringen.

--- Short content 1 ---

Lær hvordan du legger til fengende fraser med QR-kodetekster. Velg mellom forhåndsdefinerte maler eller lag dine egne med en PRO-konto.

----------

<p>For markedsførere kommer alt ut til konvertering. Hvis du har en strålende annonse designet, er det for ingenting hvis publikum ikke når ut på en eller annen måte.</p>

<p><a href="#static:url">QR-koder</a> er et nyttig markedsføringsverktøy, men å legge til en QR-kode i vanlig format yter ikke rettferdighet til det kreative arbeidet med markedsføringsmateriell.</ p>

<p>Uten et lite dytt kan publikum hoppe over QR-koden, selv når den er synlig. Ofte er en oppfordring til handling (CTA) og en unik presentasjon det som skal til for å få brukere til å skanne QR-koden.</p>

<h2>Hvorfor legge til kantlinjer og bildetekster til QR-koder?</h2>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 1 - templates.png"
        alt="QR-kodemaler - ScanMeFindMe">
</p>

<p>I stedet for å holde deg til standardformatet, vil du legge til en «Skann meg»-tekst sammen med QR-koden. Folk kan ha utviklet 'QR-kodeblindhet' når de så så mange av dem i hverdagen. </p>

<p>Men en «Skann meg»-tekst og en unik kant trekker oppmerksomheten mot QR-koden. CTA etterlater ingen tvil om hva publikum bør gjøre videre: skann QR-koden. </p>

<p>Du kan også legge til tekst som forhåndsviser hva som er på den andre siden av QR-koden. For eksempel, en "App Store"-tekst forteller brukerne at de er i ferd med å bli omdirigert til appen din på Apple App Store. Eller en enkel "Meny" for å få brukere til å sjekke ut hva som tilbys av restauranten din.</p>

<p>Ideen er at du vil innpode tillit og fjerne enhver usikkerhet med QR-koder. Kunder liker å ha en ide om hva de går inn på før de skanner QR-en. Med de riktige rammene og bildetekstene kan du gjøre nettopp det og øke antallet konverteringer.</p>

<p>Selv i <a href="#static:url">gratisversjonen av QR-kodegeneratoren</a> kan du endre bildetekstene på malene. Endre standard <strong>"Skann meg"</strong> til <strong>"Mer info"</strong>, <strong>"Vår meny"</strong>, instagramhåndtaket ditt eller et telefonnummer. Hvis teksten din er for lang eller for kort, kan du redusere eller øke skriftstørrelsen for å få den til å se bedre ut.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 2 - qr code instagram.png"
        alt="QR-kode for instagram-håndtak - ScanMeFindMe">
</p>

<p>Å tilpasse QR-kodene dine med maler hjelper ikke bare med markedsføringen, men forhindrer også forvirring når du skal sortere dem. Tenk deg at du er i ferd med å skrive ut dusinvis av QR-koder i forskjellige materialer, og du må skanne dem for bekreftelse manuelt. Ved å ha bildetekster og rammer, vet du hva de er ment for bare ved det visuelle utseendet.</p>

<h2>Hvordan lage dine egne maler</h2>

<p>Når du bruker <a href="#pro">ScanMeFindMe PRO</a>, har du tilgang til et sett med forhåndsdesignede maler. Du kan imidlertid også designe dine egne maler, laste dem opp og tilpasse <a href="#static:url">QR-koden generert på plattformen vår</a>.</p>

<p>Ikke nok med det, du kan også <a href="#article:about_presets">opprette forhåndsinnstillinger</a> som inkluderer maler du velger for å spare tid i fremtiden. </p>

<p>Nå, hvordan lager du dine egne maler?</p>

<p>Malene er bildefiler i SVG-format. Et SVG-bilde er en XML-fil som inneholder tagger som representerer forskjellige elementer. Nettlesere bruker informasjonen fra filen til å gjengi bildet i en hvilken som helst oppløsning. Du kan lage en SVG-fil via grafisk designprogramvare som Adobe Illustrator eller bruke en JPEG/PNG til SVG-konverterer.</p>

<p>Den raskeste måten å lage en mal på er å duplisere en fra biblioteket og redigere SVG-kilden.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 3 - rediger svg template.png"
        alt="Redigering av QR-kodemal - ScanMeFindMe">
</p>

<p>For at en mal skal fungere på ScanMeFindMe, må den ha et <strong class="notranslate">&lt;rect&gt;</strong>-element med <strong class="notranslate">id="qr"</strong> , som vil bli erstattet med QR-koden når den genereres.</p>

<p>Du kan også inkludere <strong class="notranslate">&lt;text&gt;</strong>-elementer. Hvis disse elementene har et <strong class="notranslate">id</strong>-attributt, blir de bildetekster som du kan endre for hver QR-kode som bruker denne malen. I tillegg, hvis slike <span class="notranslate">&lt;text&gt;</span>-elementer inneholder <strong class="notranslate">font-size</strong>-attributtet, vil du kunne endre skriftstørrelsen for hver QR-kode med samme mal.</p>

<p>Vær oppmerksom på noen begrensninger! ScanMeFindMe bruker <a href="https://cairosvg.org/" class="smfm-externallink">CairoSVG</a>-biblioteket til å konvertere genererte QR-koder til PNG-, PDF- og PS-formater. Noen kompliserte SVG-elementer kan ikke konverteres riktig. Av sikkerhetsgrunner ignoreres @include-direktivet under konvertering, så du kan ikke inkludere eksterne URL-er (med unntak av skriftene som vi installerte på serveren vår).</p>

<h2>Hvilke fonter støttes? </h2>

<p>I stedet for å gå inn i et uendelig serif vs. san serif-argument, lar vi deg bestemme hva som er best med flere ofte brukte fonter. Du kan finne skriftene som er forhåndsinstallert på serveren i vårt Github-lager: <a href="https://github.com/ScanMeFindMe/fonts" class="smfm-externallink" target="_blank">https: //github.com/ScanMeFindMe/fonts</a></p>

<p>Hvis du føler at vi går glipp av en interessant skrifttype for andre markedsførere, kan du sende inn en pull-forespørsel. Generelt foretrekker vi fonter som støtter flere språk.</p>

<p>Begynn å laste opp dine egne maler med en <a href="#pro">ScanMeFindMe PRO-konto</a> nå.</p>
