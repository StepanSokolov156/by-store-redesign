-- UP: Update search form chunk for new header design
-- Applied: 2026-04-08

UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<form action="[[~[[+pageId]]]]" method="get" class="msearch2 header__search" id="mse2_form">
    <input name="[[+queryVar]]" class="header__search-input" placeholder="Поиск на сайте" type="search" value="[[+mse2_query]]"/>
    <button class="header__search-icon" type="submit" aria-label="Найти">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11" cy="11" r="8" stroke="#6d6d6d" stroke-width="2" stroke-linecap="round"/>
            <path d="M21 21L16.65 16.65" stroke="#6d6d6d" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>
</form>
' WHERE `name` = 'mSearch2formTpl';

-- DOWN: Restore old search form
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<form action="..." ...' WHERE `name` = 'mSearch2formTpl';
