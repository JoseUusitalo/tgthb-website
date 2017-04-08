# Tales of Gods and Treachery: The Hunt for Bálbrandr Website #

**[Live Website](https://users.metropolia.fi/~joseu/tgthb/)**

The official website for the 2014 interactive fiction game Tales of Gods and Treachery: The Hunt for Bálbrandr which is also [available on GitHub](https://github.com/JoseUusitalo/tgthb).
The website was initially created as a part of the university course along with the game but was updated in April of 2017 for practice in web development.
The site contents, however, have not been changed in any meaningful way.
The focus was on improving the structure of source code, accessibility, look, and organization of the website as the original site was made in a rush and was not even completely valid HTML5.
This repository does not represent the directory structure on the web server.

## Technologies ##
The website consists only of three static pages so the code base was kept to a minimum and no PHP framework such as Laravel was used even though it would have made development easier in the long run.

### HTML5, CSS3, & Bootstrap 3 ###
The core structure of the site is done using Bootstrap 3's grid system (CSS only) and is valid HTML5, validated with the [W3C Nu Html Checker](https://validator.w3.org/nu/).
Naturally styling is done with CSS3 with an attempt at achieving good browser compatibility.

### JavaScript ###
JavaScript is used for analytics and accessibility features only and is not required for core site functionality.
One of the goals of this website update project was to create a website conforming to the [Web Content Accessibility Guidelines 2.0](https://www.w3.org/TR/WCAG20/) level AA.
(However, the website meets some AAA level requirements such as the 7:1 contrast ratio.)
The [WCAG 2.0 quick reference](https://www.w3.org/WAI/WCAG20/quickref/?col_customize&levels=aaa) was used instead of the actual guidelines document when implementing accessibility features.
Several tools were used to automatically assess conformance:
* [A-Tester](http://www.evaluera.co.uk/)
    * Some warning messages seem to contradict the guidelines.
    For example the checker disallows `onclick` events on elements and refers to the guidelines section 2.1.1 where it is [explicitly recommended](https://www.w3.org/TR/WCAG20-TECHS/SCR35.html) to use `onclick` events to make actions keyboard accessible.
* [Accessibility Bookmarklets](http://accessibility-bookmarklets.org/)
* [AInspector Sidebar for Firefox](https://addons.mozilla.org/en-US/firefox/addon/ainspector-sidebar/)
* [Accessibility Developer Tools for Chrome](https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb?hl=en)
* [NVDA screen reader](https://www.nvaccess.org/)

#### JSON-LD ####
Every content page contains unique and comprehensive JSON-LD markup with the [Schema.org](https://schema.org/) schema to improve search engine visibility.
Validation was done using Google's [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/u/0/).

### PHP ###
Some PHP is used to reduce code duplication.
The HTML head section, the page header and footer are inserted into and customized for each content page using PHP.
The method by which this is done is not particularly pretty but it is functional.

### Apache HTACCESS ###
The .htaccess file is primarily used for URL rewriting and redirection such as removing content page file extensions and cleaning up the URL as the content pages are not stored at the page root directory.
Although the website would benefit from cache control, it is not used as the university web server does not seem support it.
Note that the project contains separate .htaccess files for development and production environments.
