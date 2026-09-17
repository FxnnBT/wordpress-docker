# AI-log

## Wat ik gebruikte

- **Claude Code** (Anthropic, model Opus 5) in de terminal, in de map van dit project.
- De AI had toegang tot de bestanden, git, Docker en `curl`, en kon dus zelf bestanden schrijven, containers herstarten en de site testen.
- Bestaande setup: `docker-compose.yml` met WordPress, MariaDB en phpMyAdmin (zelf gemaakt vóór deze sessie).

## Wat de AI gedaan heeft

1. Git-repo geïnitialiseerd, `.gitignore` (`.env`) en `.env.example` gemaakt, eerste commit.
2. Bind mount `./theme:/var/www/html/wp-content/themes/portfolio` toegevoegd aan `docker-compose.yml`.
3. Custom theme geschreven (versie 1 met custom post type, versie 2 met alles in `content.php`).
4. Theme geactiveerd via WP-CLI (`wordpress:cli` image), pagina's laten aanmaken, URL's getest.
5. Commits gemaakt en gepusht.

## Wat ik heb gecontroleerd

- `php -l` op elk PHP-bestand: geen syntaxfouten.
- `curl` op `/`, `/over-mij/` en `/projecten/`: alle drie HTTP 200.
- Homepagina toont naam, drie projectkaarten en contactsectie; `/projecten/` toont drie kaarten; `/over-mij/` toont de alinea's uit `content.php`.
- In de browser op http://localhost:8000 bekeken op telefoonbreedte en desktopbreedte.
- `.env` staat niet in de repo (`git status` / GitHub gecontroleerd).

## Wat niet werkte

| Probleem | Oorzaak | Oplossing |
|---|---|---|
| `gh repo create` faalde | GitHub CLI niet geïnstalleerd | Repo handmatig op github.com aangemaakt, daarna `git remote add origin` en `git push` |
| Eerste poging om alle theme-bestanden in één bash-commando te schrijven faalde (`unexpected EOF`) | Quoting-probleem in een lang heredoc-script | AI schreef de bestanden daarna één voor één |
| WP-CLI: `Error establishing a database connection` | De CLI-container kreeg de database-variabelen uit `.env` niet mee | Variabelen expliciet als `-e` meegegeven aan `docker run` |
| `after_switch_theme`-hook (pagina's aanmaken) liep niet | Theme was al actief vóór die code bestond | Theme even omgeschakeld naar Twenty Twenty-Five en terug |
| `/over-mij/` en `/projecten/` gaven 404 | `.htaccess` in de container was leeg; `flush_rewrite_rules()` mocht er niet in schrijven | Standaard WordPress-rewriteregels handmatig in `.htaccess` gezet |

## Welke aanpassingen ik zelf deed

- Na versie 1 gevraagd om een simpelere opzet: ik begreep het custom post type en het admin-werk (menu's, projecten aanmaken) nog niet. Versie 2 heeft alleen `content.php` om aan te passen; dat is voor mij als beginner beter te volgen.
- GitHub-repo handmatig aangemaakt en gekoppeld.
- Placeholder-teksten in `content.php` vervangen door mijn eigen gegevens. <!-- TODO: aanvullen wat je precies aanpaste -->

## Wat ik geleerd heb

- WordPress kiest templates op bestandsnaam: `front-page.php` voor de homepagina, `page-<slug>.php` voor een pagina met die slug, `index.php` als fallback.
- `style.css` is verplicht en moet een header met `Theme Name` hebben, anders ziet WordPress het theme niet.
- Nette URL's (`/over-mij/`) werken alleen als de permalink-structuur is ingesteld én `.htaccess` de rewriteregels bevat.
- Wachtwoorden in `.env` horen niet in een publieke repo; `.env.example` is de template.
