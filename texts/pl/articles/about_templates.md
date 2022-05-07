<h1>Jak dodawać obramowania i podpisy do kodów QR</h1>

--- Abstract / Meta description ---

Dowiedz się, jak dodawać obramowania i podpisy, dzięki którym Twój kod QR będzie wyjątkowy. Dostosuj swój kod QR za pomocą chwytliwego wezwania do działania, aby zwiększyć konwersję.

--- Short content 1 ---

Dowiedz się, jak dodawać chwytliwe frazy z podpisami kodów QR. Wybieraj spośród wstępnie zdefiniowanych szablonów lub stwórz własny za pomocą konta PRO.

----------

<p>Dla marketerów wszystko sprowadza się do konwersji. Jeśli masz zaprojektowaną genialną reklamę, na nic się to nie zda, jeśli odbiorcy nie dotrą do niej w taki czy inny sposób.</p>

<p><a href="#static:url">Kody QR</a> są użytecznym narzędziem marketingowym, ale dodanie zwykłego kodu QR nie oddaje sprawiedliwości pracom twórczym wykonanym na materiałach marketingowych.</p>

<p>Bez lekkiego szturchania publiczność może pominąć kod QR, nawet gdy jest na widoku. Często wezwanie do działania (CTA) i unikalna prezentacja są tym, czego potrzeba, aby skłonić użytkowników do zeskanowania kodu QR.</p>

<h2>Po co dodawać obramowania i podpisy do kodów QR?</h2>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 1 - templates.png"
        alt="Szablony kodów QR - ScanMeFindMe">
</p>

<p>Zamiast trzymać się domyślnego formatu, będziesz chciał dodać tekst „Skanuj mnie” wraz z kodem QR. Ludzie mogli rozwinąć „ślepotę na kod QR”, widząc tak wiele z nich w swoim codziennym życiu.</p>

<p>Jednak tekst „Skanuj mnie” i unikatowe obramowanie zwracają uwagę na kod QR. CTA nie pozostawia wątpliwości, co widzowie powinni zrobić dalej: zeskanować kod QR.</p>

<p>Możesz także dodać tekst z podglądem zawartości po drugiej stronie kodu QR. Na przykład tekst „App Store” informuje użytkowników, że zostaną przekierowani do Twojej aplikacji w Apple App Store. Lub proste „Menu”, aby zachęcić użytkowników do sprawdzenia, co oferuje Twoja restauracja.</p>

<p>Pomysł polega na tym, że będziesz chciał zaszczepić zaufanie i usunąć wszelkie wątpliwości za pomocą kodów QR. Klienci lubią wiedzieć, w co się pakują, zanim zeskanują kod QR. Dzięki odpowiednim ramkom i podpisom możesz to zrobić dokładnie i zwiększyć liczbę konwersji.</p>

<p>Nawet w <a href="#static:url">darmowej wersji generatora kodów QR</a> możesz modyfikować napisy w szablonach. Zmień domyślną <strong>opcję „Skanuj mnie”</strong> na <strong>„Więcej informacji”</strong> , <strong>„Nasze menu”</strong> , uchwyt na Instagramie lub numer telefonu. Jeśli tekst jest za długi lub za krótki, możesz zmniejszyć lub zwiększyć rozmiar czcionki, aby wyglądał lepiej.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 2 - qr code instagram.png"
        alt="Kod QR dla uchwytu na Instagramie - ScanMeFindMe">
</p>

<p>Personalizacja kodów QR za pomocą szablonów nie tylko pomaga w marketingu, ale także zapobiega zamieszaniu podczas ich porządkowania. Wyobraź sobie, że masz zamiar wydrukować dziesiątki kodów QR w różnych materiałach i musisz je ręcznie zeskanować w celu weryfikacji. Dzięki podpisom i ramkom będziesz wiedział, do czego są przeznaczone, po ich wyglądzie.</p>

<h2>Jak tworzyć własne szablony</h2>

<p>Kiedy używasz <a href="#pro">ScanMeFindMe PRO</a> , masz dostęp do zestawu wstępnie zaprojektowanych szablonów. Możesz jednak również zaprojektować własne szablony, wgrać je i spersonalizować <a href="#static:url">kod QR wygenerowany na naszej platformie</a> .</p>

<p>Co więcej, możesz również <a href="#article:about_presets">tworzyć ustawienia wstępne</a> zawierające wybrane szablony, aby zaoszczędzić czas w przyszłości.</p>

<p>Jak teraz tworzyć własne szablony?</p>

<p>Szablony to pliki graficzne w formacie SVG. Obraz SVG to plik XML zawierający znaczniki reprezentujące różne elementy. Przeglądarki internetowe wykorzystują informacje z pliku do renderowania obrazu w dowolnej rozdzielczości. Możesz utworzyć plik SVG za pomocą oprogramowania do projektowania graficznego, takiego jak Adobe Illustrator, lub użyć konwertera JPEG/PNG na SVG.</p>

<p>Najszybszym sposobem na utworzenie szablonu jest zduplikowanie go z biblioteki i edycja źródła SVG.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 3 - edit svg template.png"
        alt="Edycja szablonu kodu QR - ScanMeFindMe">
</p>

<p>Aby szablon działał na ScanMeFindMe, musi mieć element <strong class="notranslate">&lt;rect&gt;</strong> z <strong class="notranslate">id=&quot;qr&quot;</strong> , który zostanie zastąpiony kodem QR podczas generowania.</p>

<p>Możesz również dołączyć elementy <strong class="notranslate">&lt;text&gt;</strong> , jeśli te elementy mają atrybut <strong class="notranslate">id</strong> , staną się podpisami, które możesz modyfikować dla każdego kodu QR, który używa tego szablonu. Dodatkowo, jeśli takie elementy <span class="notranslate">&lt;text&gt;</span> zawierają atrybut <strong class="notranslate">font-size</strong> , będziesz mógł zmienić rozmiar czcionki dla każdego kodu QR przy użyciu tego samego szablonu.</p>

<p>Uważaj na pewne ograniczenia! ScanMeFindMe używa biblioteki <a href="https://cairosvg.org/" class="smfm-externallink">CairoSVG</a> do konwersji wygenerowanych kodów QR na formaty PNG, PDF i PS. Niektóre skomplikowane elementy SVG mogą nie zostać poprawnie przekonwertowane. Ze względów bezpieczeństwa dyrektywa @include jest ignorowana podczas konwersji, dlatego nie można dołączyć żadnych zewnętrznych adresów URL (z wyjątkiem czcionek, które zainstalowaliśmy na naszym serwerze).</p>

<h2>Jakie czcionki są obsługiwane?</h2>

<p>Zamiast wdawać się w niekończący się argument szeryfowy i bezszeryfowy, pozwalamy Ci zdecydować, co jest najlepsze z kilkoma powszechnie używanymi czcionkami. Czcionki, które są preinstalowane na serwerze można znaleźć w naszym repozytorium Github: <a href="https://github.com/ScanMeFindMe/fonts" class="smfm-externallink" target="_blank">https://github.com/ScanMeFindMe/fonts</a></p>

<p>Jeśli uważasz, że brakuje nam interesującej czcionki dla innych marketerów, możesz przesłać żądanie ściągnięcia. Generalnie preferujemy czcionki obsługujące wiele języków.</p>

<p>Rozpocznij przesyłanie własnych szablonów za pomocą <a href="#pro">konta ScanMeFindMe PRO</a> już teraz.</p>
