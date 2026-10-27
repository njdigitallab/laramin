function Menu() {
    /**
     * Initiate the menu.
     */
    this.init = function() {
        this.registerSidebarTogglerEvents();
        this.registerUserMenuTogglerEvents();
        this.registerMenuTogglerEvents();
        this.showCurrentMenu();
    }

    /**
     * Register the sidebar toggler events.
     */
    this.registerSidebarTogglerEvents = function () {
        document.getElementById('menu-toggler').addEventListener('click', function () {
            var body = document.querySelector('body');

            if (body.classList.contains('sidebar-open')) {
                body.classList.remove('sidebar-open');
            } else {
                body.classList.add('sidebar-open');
            }
        });
    }

    /**
     * Register the user menu toggle events.
     */
    this.registerUserMenuTogglerEvents = function () {
        document.getElementById('header-user-profile').addEventListener('click', function () {
            var dropdown = document.getElementById('header-user-profile-dropdown');

            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.add('flex');
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.remove('flex');
                dropdown.classList.add('hidden');
            }
        });
    }

    /**
     * Register the menu toggler events.
     */
    this.registerMenuTogglerEvents = function () {
        document.querySelectorAll('.parent-menu-item').forEach(function (element) {
            element.addEventListener('click', function (event) {

                var currentMenuOpen = element.parentElement.classList.contains('open');

                // Close up all menus
                document.querySelectorAll('.parent-menu-item').forEach(function (element) {
                    element.parentElement.classList.remove('open');
                });

                // Open/close the menu that's clicked
                if (currentMenuOpen) {
                    element.parentElement.classList.remove('open');
                } else {
                    element.parentElement.classList.add('open');
                }
            });
        });
    }

    /**
     * Show the current menu.
     */
    this.showCurrentMenu = function () {
        var parentMenuItem = this.getCurrentParentMenuElement();

        if (parentMenuItem == null) {
            return;
        }

        parentMenuItem.parentElement.classList.add('open');
        parentMenuItem.parentElement.classList.add('active');

        var submenu = this.getCurrentAnchorElement();

        if (submenu == null) {
            return;
        }

        submenu.classList.add('active');
    }

    /**
     * Get the current parent menu element.
     * 
     * @return obj|void
     */
    this.getCurrentParentMenuElement = function() {
        if (typeof menuId != 'undefined') {
            return document.querySelector("[parent-id='"+menuId+"']");
        }

        var activeSubmenu = this.getCurrentAnchorElement();

        if (activeSubmenu == null) {
            return;
        }

        return activeSubmenu.parentElement.parentElement.parentElement.querySelector('.parent-menu-item');
    }

    /**
     * Get the current anchor element.
     *
     * @return obj
     */
    this.getCurrentAnchorElement = function() {
        var currentUrl = this.getCurrentUrl();
        return document.getElementById('sidebar').querySelector("a[href='"+currentUrl+"']");
    }

    /**
     * Get the current url.
     */
    this.getCurrentUrl = function () {
        return document.head.querySelector("meta[name='route-uri']").content;
    }
}

new Menu().init();