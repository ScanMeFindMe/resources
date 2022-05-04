<h1>Hur man lägger till kanter och bildtexter till QR-koderna</h1>

--- Abstract / Meta description ---

Lär dig hur du lägger till ramar och bildtexter som gör din QR-kod unik. Stil din QR-kod med en catchy uppmaning för att öka konverteringen.

--- Short content 1 ---

Lär dig hur du lägger till catchy fraser med QR-kodtexter. Välj bland fördefinierade mallar eller skapa dina egna med ett PRO-konto.

----------

<p>För marknadsförare kommer allt till konvertering. Om du har en briljant annons designad är det för intet om publiken inte når ut på ett eller annat sätt.</p>

<p><a href="#static:url">QR-koder</a> är ett användbart marknadsföringsverktyg, men att lägga till en QR-kod i vanlig format gör inte det kreativa arbetet med marknadsföringsmaterial rättvisa.</ p>

<p>Utan en liten knuff kan publiken hoppa över QR-koden, även när den är synlig. Ofta är en uppmaning (CTA) och en unik presentation vad som krävs för att få användare att skanna QR-koden.</p>

<h2>Varför lägga till ramar och bildtexter till QR-koder?</h2>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 1 - templates.png"
        alt="QR-kodmallar - ScanMeFindMe">
</p>

<p>Istället för att hålla fast vid standardformatet vill du lägga till en "Skanna mig"-text tillsammans med QR-koden. Människor kan ha utvecklat "QR-kodblindhet" när de såg så många av dem i deras dagliga liv. </p>

<p>Men en "Skanna mig"-text och en unik ram uppmärksammar QR-koden. CTA lämnar inga tvivel om vad publiken ska göra härnäst: skanna QR-koden. </p>

<p>Du kan också lägga till text som förhandsgranskar vad som finns på andra sidan av QR-koden. Till exempel, en "App Store"-text berättar för användarna att de är på väg att omdirigeras till din app på Apple App Store. Eller en enkel "meny" för att få användare att kolla in vad som erbjuds av din restaurang.</p>

<p>Tanken är att du vill ingjuta förtroende och ta bort all osäkerhet med QR-koder. Kunder vill ha en uppfattning om vad de ger sig in på innan de skannar QR:en. Med rätt ramar och bildtexter kan du göra precis det och öka antalet konverteringar.</p>

<p>Även i <a href="#static:url">gratisversionen av QR-kodgeneratorn</a> kan du ändra bildtexterna på mallarna. Ändra standardinställningen <strong>"Skanna mig"</strong> till <strong>"Mer info"</strong>, <strong>"Vår meny"</strong>, ditt instagram-handtag eller ett telefonnummer. Om din text är för lång eller för kort kan du minska eller öka teckenstorleken för att få den att se bättre ut.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 2 - qr-kod instagram.png"
        alt="QR-kod för instagramhandtag - ScanMeFindMe">
</p>

<p>Att anpassa dina QR-koder med mallar hjälper inte bara med marknadsföringen utan förhindrar också förvirring när du reder ut dem. Föreställ dig att du är på väg att skriva ut dussintals QR-koder i olika material, och du måste skanna dem för verifiering manuellt. Genom att ha bildtexter och ramar vet du vad de är avsedda för bara genom deras visuella utseende.</p>

<h2>Så här skapar du dina egna mallar</h2>

<p>När du använder <a href="#pro">ScanMeFindMe PRO</a> har du tillgång till en uppsättning fördesignade mallar. Men du kan också designa dina egna mallar, ladda upp dem och anpassa <a href="#static:url">QR-koden som genereras på vår plattform</a>.</p>

<p>Inte bara det, du kan också <a href="#article:about_presets">skapa förinställningar</a> som inkluderar ditt val av mallar för att spara tid i framtiden. </p>

<p>Hur skapar du dina egna mallar?</p>

<p>Mallarna är bildfiler i SVG-format. En SVG-bild är en XML-fil som innehåller taggar som representerar olika element. Webbläsare använder informationen från filen för att återge bilden i valfri upplösning. Du kan skapa en SVG-fil via programvara för grafisk design som Adobe Illustrator eller använda en JPEG/PNG till SVG-konverterare.</p>

<p>Det snabbaste sättet att skapa en mall är att duplicera en från biblioteket och redigera SVG-källan.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 3 - redigera svg template.png"
        alt="Redigera QR-kodmall - ScanMeFindMe">
</p>

<p>För att en mall ska fungera på ScanMeFindMe måste den ha ett <strong class="notranslate">&lt;rect&gt;</strong>-element med <strong class="notranslate">id="qr"</strong> , som kommer att ersättas med QR-koden när den genereras.</p>

<p>Du kan också inkludera <strong class="notranslate">&lt;text&gt;</strong>-element, om dessa element har ett <strong class="notranslate">id</strong>-attribut, blir de bildtexter som du kan ändra för varje QR-kod som använder den här mallen. Dessutom, om sådana <span class="notranslate">&lt;text&gt;</span>-element innehåller attributet <strong class="notranslate">font-size</strong>, kommer du att kunna ändra teckenstorleken för varje QR-kod med samma mall.</p>

<p>Se upp för vissa begränsningar! ScanMeFindMe använder <a href="https://cairosvg.org/" class="smfm-externallink">CairoSVG</a>-biblioteket för att konvertera genererade QR-koder till PNG-, PDF- och PS-format. Vissa komplicerade SVG-element kanske inte konverteras korrekt. Av säkerhetsskäl ignoreras direktivet @include under konverteringen, så du kan inte inkludera några externa webbadresser (med undantag för de typsnitt som vi installerade på vår server).</p>

<h2>Vilka teckensnitt stöds? </h2>

<p>Istället för att gå in på ett oändligt serif vs. san serif-argument låter vi dig bestämma vad som är bäst med flera vanliga typsnitt. Du kan hitta teckensnitten som är förinstallerade på servern i vårt Github-arkiv: <a href="https://github.com/ScanMeFindMe/fonts" class="smfm-externallink" target="_blank">https: //github.com/ScanMeFindMe/fonts</a></p>

<p>Om du känner att vi går miste om ett intressant typsnitt för andra marknadsförare kan du skicka in en pull-förfrågan. I allmänhet föredrar vi typsnitt som stöder flera språk.</p>

<p>Börja ladda upp dina egna mallar med ett <a href="#pro">ScanMeFindMe PRO-konto</a> nu.</p>
