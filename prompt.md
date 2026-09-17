# Prompt en AI-antwoorden

Tool: Claude Code (Anthropic), model Opus 5. Sessie van 17 september 2026.

## Prompt 1 – repo aanmaken

> ik heb hier een docker container met word press. ik moet een repo maken. is dit de goede folder?

**Antwoord (samengevat):** De AI bekeek de map (`docker-compose.yml`, `.env`, `uploads.ini`), bevestigde dat het de goede map was en waarschuwde dat `.env` wachtwoorden bevat en niet in de repo hoort. Voorstel: `git init`, `.gitignore` met `.env`, `.env.example` als template, eerste commit.

> ja doe maar, en maak een public github repo

**Antwoord:** Lokale repo aangemaakt en gecommit. De GitHub CLI (`gh`) bleek niet geïnstalleerd; de AI gaf twee opties (gh installeren, of repo handmatig op github.com aanmaken en `git remote add` + `git push`). Ik heb de repo handmatig aangemaakt.

## Prompt 2 – de opdracht

> Je bent een WordPress-theme developer. Help mij een eerste opzet te maken voor een persoonlijke portfolio voor een software developer die stage zoekt. Gebruik een custom WordPress-theme met PHP-templates. Ik wil een homepagina, over-mij-pagina, projectoverzicht, drie projectkaarten en contactsectie. De stijl is rustig en professioneel, mobile-first, met semantische HTML. Leg per bestand uit wat het doet. Geef geen bestanden die ik niet nodig heb.

**Antwoord (samengevat):** De AI maakte een theme in `theme/` en voegde een bind mount toe aan `docker-compose.yml` zodat de map in de container op `wp-content/themes/portfolio` verschijnt. Eerste versie:

- `style.css` – theme-header + mobile-first CSS met CSS-variabelen
- `functions.php` – stylesheet laden, menu registreren, custom post type `project` + taxonomie `technologie`
- `header.php`, `footer.php`
- `front-page.php` – hero, drie recentste projecten, contactsectie
- `page.php` – over mij
- `archive-project.php` – projectoverzicht op `/projecten/`
- `template-parts/project-card.php` – herbruikbare kaart
- `index.php` – verplichte fallback

Per bestand volgde een uitleg in een tabel, plus een stappenplan om in de WordPress-admin het theme te activeren, pagina's, projecten en een menu aan te maken.

## Prompt 3 – vereenvoudiging

> kan je het niet zo doen dat ik alleen placeholder teksts kan veranderen? ik snap echt helemaal niks van wordpress en probeer het te leren

**Antwoord (samengevat):** De AI herschreef het theme zodat er geen admin-werk nodig is:

- Alle teksten in één bestand `content.php` (PHP-array met naam, slogan, e-mail, intro, over-mij-alinea's, drie projecten, contacttekst).
- Custom post type en menu verwijderd; `page.php` en `archive-project.php` verwijderd.
- `page-over-mij.php` en `page-projecten.php` toegevoegd (WordPress kiest `page-<slug>.php` automatisch).
- `functions.php` maakt bij activeren de pagina's aan en zet nette URL's.
- Menu hardcoded in `header.php`.

Daarna activeerde de AI het theme via WP-CLI, controleerde alle drie de URL's met `curl` en committe het geheel. Uitleg per bestand opnieuw in een tabel.

## Prompt 4 – bewijs

> Maak twee bestanden in de hoofdmap van je repository: prompt.md en ai-log.md

**Antwoord:** dit bestand en `ai-log.md`.
