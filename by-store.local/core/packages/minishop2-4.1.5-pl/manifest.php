<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => '# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [4.1.5-pl] - 2022-04-09

### Fixed
- Fixed a bug with creating cart key with options
- fix CustomInputNumber error in cart

## [4.1.4-pl] - 2022-03-31

### Added
 - New lexicons
 - Ability to attach TV fields to products inside an order letter
 - Ability to regenerate images from the product grid
 - Eslint JS Code Validator

 ### Changed
 - The regular expression for validating a phone number in an order has been moved to the system setting
 - All JS code in the new set of scripts is formatted according to eslint rules
 - Minishop2 Config renamed to config in main class of new JS bundle

 ### Fixed
 -  A bug with missing default value for msOrderAddress.order_id
 -  A bug with dragging goods in the grid

## [4.1.3-pl] - 2022-03-14

### Changed
- Fixed error with return data in snippet msGallery


## [4.1.2-pl] - 2022-02-03

### Changed
- Fixed incorrect preventDefault in vanilla js script

## [4.1.1-pl] - 2022-02-02

### Changed
- Update JS classes names in system settings
- Rename new JS method sendResponse to sendRequest

## [4.1.0-pl] - 2022-31-01

### Added
- New type of options - color selection
- Queue manager support
- Working with lexicons through the crowdln service, similar to MODX
- Additional data returned by the cart when it is changed
- New modes for returning data from msGallery
- System setting ms2_status_canceled


### Changed
- Fixed a bug with simultaneous operation of the basket with different contexts
- Added saving the description field to the gallery/upload processor
- Improved sorting and selection of uploaded files to save the first image to the msProductData table
- Updated the text and values of the setting_ms2_order_product_options system setting
- Fixed a bug with redirection after placing an order in new js
- Many minor syntax and code readability improvements

### Removed
- Setting for button icons in mgr category
- Phone length limitation during validation in the order

## [4.0.0-pl] - 2022-12-18

### Added
- Displaying custom parameters in msProducts.tpl #742
- Patch for error when installing and creating the ms2_options table  #747
- Patch for error with non-existent fields in the tables #749
- Creating a vendor when creating a product #748

## [4.0.0-beta] - 2022-09-16

### Added
- A new set of JS scripts
- Creating an order from the manager
- Ability to assign order statuses for various events (new order, payment, creating draft)

### Changed
- Relationship between msOrder and msOrderAddress
- Interfaces for controllers are moved to a separate file

### Removed
- Plugin fotorama
- Depricated controllers

## [3.0.7-pl] - 2022-09-06

### Added
- MODX and PHP version check before installation
- Snippet options are now available in wrapper chunks
- The ability to search for an order in the admin panel by phone number
- Email field to order address window

### Changed

- Css styles reserved for global layout classes (header, footer, title, count, weight, price, image) in msCart and msGetOrder chunks.

## [3.0.6-pl] - 2022-06-29

### Changed
Improved readability of the code without changing the logic
Fixed potential unknown variable error in  Order.submit method

### Removed
- PayPal payment module

## [3.0.5-pl] - 2022-06-16

### Changed
Fixed bug of linking order and address models
Fixed conflict of identical fields #696

## [3.0.4-pl] - 2022-06-09

### Added
Removal of empty directories of images #685

### Changed
Fix escaping rank field for msProductFile #690
Fix first thumbnail generator #691
load minishop2:default lexicon in registerFrontend #688

## [3.0.3-pl] - 2022-05-30

### Changed
- Fixed error with escaping of the rank on object msOrderStatus
- Added escaping of the rank in upload processor
- Returned the ability to add any fields to the order object

## [3.0.2-pl] - 2022-05-20

### Added
- The ability to update image previews in the product grid
- The ability to specify the role number when registering a user
- Lost system setting ms2_cart_max_count

### Changed
- msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler deprecated file notifications now listen to the log_deprecated system setting
- Escaping of the rank field to support mysql 8

## [3.0.1-pl] - 2022-05-04

### Changed
- Old controllers msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler are marked as deprecated with usage error logged
- The configuration required for JS controllers no longer depends on the included js files and is always available
- DB storage controllers got additional checks
- Update Copyrights

## [3.0.0-pl] - 2022-04-27

### Added
- New catalog handlers to store the main controllers: msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler
- System settings: ms2_tmp_storage, ms2_register_frontend
- Database fields ms2_orders.session_id, ms2_order_addresses.email ms2_order_products.properties
- New controllers for db storage, session storage
- New order status Processed
- Method RegisterFrontend

### Changed

- Composite msOrder.Address change owner from foreign to local
- Clear controllers msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler.  Content replaced by stub
- Resolver table.  New mechanism for managing database tables and fields
- Field\'s type  ms2_order_statuses.rank  changed from tinyint to int
- Plugin minishop2.  Added Method RegisterFrontend to section OnLoadWebDocument

### Removed
- Resolver Upgrade

## [2.9.3-pl] - 2021-10-16

### Added

- Added a class for the form of cleaning the trash [#630]

### Changed

- Fixed bug with adding text_address field [#628]

## [2.9.2-pl] - 2021-09-28

### Added

- Added the ability to set / remove product previews [#617]

### Changed

- Removed duplicate code [#619]
- Removed a broken check for resource changes [#618]
- Fixed correct http code 403 in case of unauthorized access to the file [#622]
- Default msProduct class when added to cart [#613]
- Improved overall code readability [#620]
-- Optimized dirname method when connecting files
-- Optimized definition of constants
-- Added PHPDOC
-- Removed commented code and some empty blocks
-- Added access specifier to methods

## [2.9.1-pl] - 2021-09-12

### Added

- Added msVendor fields in the list of order items [#612]
- Added frequently used fields to the address table [#581]

### Changed

- Bug fixed This image is already in the product gallery

## [2.9.0-pl] - 2021-08-25

### Added

- Added wiretapping of initiated context for work from API [#578]
- Added counting of the number of items in the cart [#579]
- Replace ssl certificate for PayPal [#573]
- Added delivery_cost parameter for msOnGetOrderCost event [#585]
- Added the ability to set week start in orders [#570]
- Added support for zero cost

### Changed

- Fixed the logic of registration of the order status label in the order history [#576], [#580]
- Bringing the code to the PSR12 standard [#574]
- Refactoring PSR-12 errors [#577]
- Added a name field for micro-markup [#588]
- Fixed error Cannot read property \'Search\' of undefined [#591]
- getCost method optimized [#602]
- Fixed error create ms2_options table

## [2.8.3-pl] - 2021-04-01

### Changed

- Regular expression update to validate phone number [#563]
- Legacy php backward support [#564]

### Removed

- Removed object references as legacy code. [#566]

## [2.8.2-pl] - 2021-03-15

### Added

- Added support for OR, AND operators in the optionFilters parameter in the msProducts snippet [#539]
- The concept of refactoring the connection of notification scripts [#542]
- Added "Save and close" button on links window [#533]
- Added support for the return parameter in msProducts [#553]

### Changed

- Fix Recoverable error: Object of class msProductData_mysql could not be converted to string [#555]
- Change variables in fenom chunk [#557]
- New keep a changelog format
- Fixed display of product option value on product category page [#547]
- Remove unnecessary type="text/javascript"

### Removed

- Removed unused library `jquery.form` [#544]
- Removed unused old.css file [#552]
- Removed deprecated backward compatibility method with ms1 [#537]
- Remove duplicate css [#558]

## [2.8.1-pl] - 2021-02-14

### Changed

- Fixed Recoverable error: Object of class msProductData_mysql could not be converted to string [PR #532]

## [2.8.0-pl] - 2021-01-27

### Added

- Improvement. Dividing the order amount by the purchase and delivery [PR #507]

### Changed

- Checking if the field free_delivery_amount is present [PR #520]
- Set checkbox value [PR #513]
- Minor English vernacular improvements [PR #512] [PR #511]
- Fixed. Correction of displaying a product category if it is not a container [PR #509]
- Fixed PHP warning: count() error [PR #508]
- Fixing the Notice: Undefined offset error when importing a picture with a Russian name through the \'gallery/upload\' processor [PR #504]
- Converting code to cross-browser ECMAScript 5.1 standard [PR #503]
- Fixed display of settings tabs and resource groups when editing a Category [PR #501]
- Fixed logic for free delivery calculation [PR #498]

### Removed

- Removing the console script for converting from ms1 to ms2 [PR #506]

## [2.7.0-pl - 2020-12-09

### Added

- Improvement. Discount calculation added to the status method in the cart class [PR #497]
- Improvement. Added order product\'s options interface [PR #491]
- Improvement. Added amount for free shipping [PR #490]
- Improvement. Changing any product fields by event msOnGetProductFields [PR #417]
- Improvement. Added an example of displaying product content on Fenom [PR #478]
- Improvement. `ignoreGroups` and `sortGroups` to `msProductOptions` snippet [PR #483]
- Improvement. Added `return` property to `msProductOptions` snippet [PR #484]
- Improvement. Added transparency to disabled grid lines [PR #485]

### Changed

- Fixed problem with "Cannot read property items of undefined" and corrected the order of tabs when creating an item [PR #486]
- Fixed PHP warning: count() [PR #482]
- Fixed baseUrl in media source [PR #489]
- Fixed visual bug [PR #480]

## [2.6.0-pl] - 2020-11-12

### Added

- Added micro-markup [PR #471]
- Added ms2_frontend_country lexicon [PR #470]
- Added displaying of the alt attribute and title in the gallery chunk [PR #469, #472]
- Added display of the gallery tab when creating a product [PR #455]
- Added sortOptions property for snippet msProductOptions [PR #447]
- Added multicontext cart settings [PR #436]
- Added buttons on orders and settings pages [PR #435]
- Added sorting sortOptions in msOptions, msProductOptions [PR #407, #433]
- Added renderBadge to statuses [PR #432]
- Added settings link in miniShop2 menu [PR #430]
- Added msorder_remove permission [PR #421]
- Added icon for image in vendor modal creation [PR #420]
- Added usable choice of chunk in the windows for creating/editing statuses [PR #419]
- Added clone msCategory options on subcategory creation [PR #412]
- Added ids to product tabs [PR #408]
- Added filter on modCategory for options [PR #405]
- Added settings for order numeration [PR #393]
- Added example for webp in media source [PR #385]
- Added reloading order object after changes in changeOrderStatus method [PR #384]
- Added icons for tree from system settings [PR #365]
- Added product cost in cart [PR #358]

### Changed

- Fixed sorting by customer field in the order list [PR #468]
- Updated snippets: msCart, msOrder, msGetOrder and msGallery [PR #461]
- Changed the display encoding of collector messages [PR# 460]
- Changed order of tabs for category [PR #459]
- Expanded functionality of windows for quick creation/updating of product/category [PR #439]
- Fixed clone media source on update if is renamed [PR #438]
- Fixed ui bug header in modal window [PR #434]
- Update lexicons [PR #414]
- Ext.Loader remove asynchronous loading of strftime-min-1.3.js [PR #411]
- Display field key if caption and lexicon entry is empty [PR #401]
- Fix miniShop2.combo.Options paging on local mode [PR #400]
- Fixed deleting link from one-to-one deleting all links [PR #389]
- Switch context if the order context does not match [PR #388]
- Fixed paypal error [PR #387]
- Fixed error 500 if pdoTools not installed [PR #386]
- Change class name to variable in sort processor  [PR #381]
- Moved product gallery tabs if enabled ticket comments [PR #377]
- Moved product tabs [PR #376]
- Fix options bug [PR #374]
- Fix if impossible to remove the "Vendor" field [PR #372]
- Output context name if it is [PR #364]
- Notify user on move product in grid [PR #359]
- Fixed miniShop2.combo.Options [PR #355]

## [2.5.0 pl]

### Added

- Added translation into Belarusian (thanks @dmse4050)
- Improvement. Adding Delete / Update buttons preview in the product gallery [PR #346]
- Improvement. Add drag\'n\'drop sortable for miniShop2.combo.Options [PR #345]
- Improvement. Getting parameters for multi-domain [PR #340]
- Added class small in chunk.ms_cart.tpl [PR #319]
- Added support for *webp images [PR #318]

### Changed

- Fix resetting user id value on expand combobox [PR #351]
- Fix hiding content field via FC [PR #343]
- Fix bug when uploading pictures to the gallery, files remain in the root [PR #349]
- Fix bug when saving order and changing status [PR #348]
- Fix Preventing the removal of goods with the wrong (empty) count [PR #344]
- Fix TV update bug if there are more than 10 during CSV import [PR #341]
- Fixed error "Incorrect decimal value" [PR #338]
- Change update product from grid [PR #337]
- Fix "formatPrice", "formatWeight" [PR #336]
- Optimization of the withdrawal of orders and fix for recounting an order [PR #335]
- Fix cutting Czech characters from username in order [PR #334]
- Fix defaultSortField [PR #333]
- Refactoring Relationship Methods [PR #331, #332]
- Fix set default media source on change resource class_key [PR #330]
- Fix some bugs on manager pages [PR #327]
- Fix romanian lexicon [PR #324]

## [2.4.18 pl]

### Added

- [#315] Added romanian lexicon.
- [#316] Added webp extension for mediaSource.

### Changed

- Update chunks for Bootstrap 4.
- Fixed display of manager tree in MODX 2.7.1
- [#314] Fixed missing categories for options in settings.

## [2.4.17 pl2]

### Changed

- Fixed load of lexicons in contexts.

## [2.4.16 pl]

### Changed

- Fixed possible SQL injections by Agel_Nash
- Change miniShop2::changeOrderStatus
- Change "msProductGetListProcessor"

## [2.4.15 pl]

### Added

- Added new events: "msOnBeforeGetOrderCustomer", "msOnGetOrderCustomer"

### Changed

- Change miniShop2::getCustomerId
- Change submit::msOrderHandler
- Change getDeliveryRequiresFields::msOrderHandler

## [2.4.14 pl]

### Added

- Added new events: "msOnBeforeSaveOrder" and "msOnSaveOrder"

### Changed

- Change miniShop2.combo.Options
- Fixed msCategoryOption permission
- Change receiver validate
- Fixed size gallery [js]
- Fixed height options tree [js]
- Change msProductData::saveProductOptions()
- Change key index prefix length to 191 from 255
- Change new installs to create tables with "InnoDB" engine

## [2.4.13 pl]

### Added

- Added "payment_link" in the snippet msGetOrder.
- Added new event: "msOnGetStatusCart".
- Added ukrainian lexicon.

### Changed

- Fixed "cultureKey" option
- Change Order submit js.
- Fixed msProductData::loadOptions().

## [2.4.12 pl]

### Added

- Added dutch lexicons by Sterc
- Added greek frontend lexicon

### Changed

- When you change the price of a product with msOnGetProductPrice, the old_price will be changed only if the new price is lower.
- Fixed method msProductData:rankProductImages()

## [2.4.11 pl]

### Added

- [mgr] Add contexts list into filters at the orders page.
- [mgr] Add "expand,collapse,check,uncheck" actions to the categories and options trees.

### Changed

- Fixed default path to loading services in the loadCustomClasses() method.
- Update the cost of an orders after product addition.
- Improved processing of products options.
- [mgr] Fixed possible error on get orders statuses list.
- [mgr] Fix "xcheckbox" in a Product options.

### Removed

- Removed call of ms2Gallery::syncFiles() from msProductData::updateProductImage().

## [2.4.10 pl]

### Added

- Added events in the processors of msOrderProduct.

### Changed

- Fixed possible E_WARNING in the snippet msOrder.

## [2.4.9 pl]

### Changed

- Improved loading of pdoTools in snippets

## [12.4.8 pl]

### Added

- Added support of ms2Gallery 2.0.

### Changed

- Media source option "thumbnails" now uses key of array with parameters as alias for thumbnail.
- Fixed bug of gallery with drag-over in Firefox.

### Removed

- Removed system setting "ms2_product_thumbnail_size".

## [2.4.7 pl]

### Changed

- Fixed the loading of product plugins when they can be loaded multiple times.
- Fixed fatal error on get classes in settings with some 3rd party payment methods.
- Fixed bug with incorrect rank of thumbnails after a sorting.

## [2.4.6 pl]

### Added

- Added the checking of users email when getting a customer id for new order.

### Changed

- Improved compatibility with MODX 2.5.2.

## [2.4.5 pl]

### Changed

- Fixed possible error in log on create a new product from cli mode.
- Updated jGrowl to version 1.4.5.

## [2.4.4 pl]

### Changed

- [#242] Ability to specify only needed options in the snippet msProductOptions.
- [#212, #241] Fixed handling of a product options with a dot in the name.
- [#240] Fixed the reset of date fields when product has been edited via category grid.
- [#239] Fixed duplicate and empty options in msProductData.
- [#229, #238] Categories tree now respects the "resource_tree_node_name_fallback" system setting.

## [2.4.3 pl]

### Changed

- [#237] Fixed msProductData::get(\'options\') method.
- [#236] Ability to display category columns of an ordered product.
- [#231] Snippet msOptions now transfers id of a product into a chunk.
- [#230] Fixed the inability to change vendor of a product more than 1 times.
- [#228] Possible fix for "empty file" in product gallery on some server configurations.
- [#227] Improved performance of the grid with options in settings.

## [2.4.2 pl]

### Changed

- Fixed error when system setting "ms2_product_tab_gallery" is disabled.

## [2.4.1 pl2]

### Changed

- Fixed error with overwrite product options when update from category grid.

## [2.4.0 pl]

### Changed

- [#222] Optimized some code in chunks.

## [2.4.0 rc11]

### Changed

- [msGallery] Improved fetching of thumbnails in the snippet.
- [#220] [mgr] Improved the total numbers in the form of orders.

## [2.4.0 rc10]

### Changed

- msPaymentHandler::getOrderHash() now includes order num.

## [2.4.0 rc9]

### Changed

- [#215] Ability to specify working context for cart.

## [1.4.0 rc8]

### Changed

- [#218] The product options are active immediately after assigning them to categories.

## [2.4.0 rc7]

### Changed

- Reverted back #216 due to issues.
- [#216] [msGetOrder] Need to update pdoTools to version 2.5.6-pl to fix this.
- [msGetOrder] Orders are show to all if parameter &id is set.
- [mgr] Fixed number of rows in orders panel.

## [2.4.0 rc6]

### Changed

- [#216] [msGetOrder] Fixed ability to &includeTVs.

## [2.4.0 rc5]

### Removed

- Removed wrong "requires" field in msPayment settings.

## [2.4.0 rc4]

### Changed

- Improved migration of system settings when upgrade from older versions.

## [2.4.0 rc3]

### Changed

- [msGallery] Improved snippet in case when product has no media source set.
- Fixed work with autocomplete product options.

## [2.4.0 rc2]

### Changed

- Fixed duplicate of order number in msOrderHandler.

## [2.4.0 rc1]

### Changed

- Fixed loop error on change class key from modResource to msProduct.

## [2.4.0 rc]

### Added

- [msOrder] New parameter &userFields.
- [msGetOrder] Added chunk tpl.msGetOrder.
- [msOptions] Added chunk tpl.msOptions.
- [msProductOptions] Added chunk tpl.msProductOptions.
- [msGallery] Added chunk tpl.msGallery.
- [msGallery] Added Fotorama script out from the box.

### Changed

- All snippets are completely rewritten.
- All chunks uses Fenom syntax.
- Improved compatibility with MySQL 5.7.
- Improved orders form panel.
- [msOrder] Chunk tpl.msOrder.outer renamed to tpl.msOrder.
- [msCart] Chunk tpl.msCart.outer renamed to tpl.msCart.
- [msGetOrder] Now acts as usual snippet and do not set placeholders to the page by default.
- Improved email chunks. Added common email template.

### Removed

- [msOrder] Removed chunks tpl.msOrder.delivery, tpl.msOrder.payment and tpl.msOrder.success.
- [msCart] Removed chunks tpl.msCart.row and tpl.msCart.empty.
- [msGetOrder] Removed chunk tpl.msGetOrder.row.
- [msOptions] Removed chunks tpl.msOptions.outer and tpl.msOptions.row.
- [msProductOptions] Removed chunks tpl.msProductOptions.outer and tpl.msProductOptions.row.
- [msGallery] Removed chunks tpl.msGallery.outer, tpl.msGallery.row and tpl.msGallery.empty.

## [2.4.0 beta3]

### Changed

- Small improvements of product gallery.
- Improved ExtJS settings panel.

## [2.4.0 beta2]

### Added

- Added system setting "ms2_template_category_default".
- New system to register 3rd party classes of extensions.
- New system to register 3rd party plugins for objects model.
- New logo.

### Changed

- Improved referrals registration.
- Improved ExtJS product panel.
- Emails chunks are now processed by pdoTools.
- Replaced modX::toJSON and modX::fromJSON calls to native functions.
- Improved duplicate of products and categories.
- The data fields of the product are added to the tags of the resource: [[*price]], [[*article]] etc.
- Improved registration of JS and CSS on frontend.
- Javascript callbacks now are arrays with functions. New functions to register and remove callbacks.
- Updated model for MySQL 5.7.
- Improved product gallery.

## [2.4.0 beta1]

### Changed

- Improved categories with products.
- Improved menu of categories in resources tree.
- Ability to change class_key of category.
- Many improvements of ExtJS category panel and products grid.
- Setting ms2_category_content_default is now empty by default.

## [2.4.0 beta0]

### Added

- Added icons for CRCs in managers tree.

### Changed

- Fixed php type of "article" in msProductData xPDO object.
- Improved orders panel.
- Updated builder.
- Minimum version is MODX 2.3.

## [2.2.0 pl2]

### Changed

- ID for Category\'s options tab
- Fix installation for MODX 2.4.0
- msProductOptions product property

## [2.2.0 beta4]

### Changed

- Category pagination fix.
- Fixed bug removal options when modifying and generating images of products
- Don\'t display tplOuter when all options are empty with hideEmpty=1

## [2.2.0 beta3]

### Changed

- Measure units for options.
- Restrictions for option names.
- Superboxselect and checkbox option types.
- Fixed bug with empty options after modResource save.

## [2.2.0 beta2]

### Changed

- Groups of options support.
- hideEmpty parameter in msProductOptions snippet.
- Fixed some bugs.

## [2.2.0 beta]

### Changed

- Custom product options support. More info at modx.pro.
- Fixed TV showing under content.
- Some code refactoring.

## [2.1.12 pl]

### Changed

- Improved installation script for MODX 2.4.

## [2.1.11 pl]

### Added

- Added new events: "msOnBeforeGetOrderCost" and "msOnGetOrderCost".

### Changed

- [mgr] Direct links to orders in manager.

## [2.1.10 pl1]

### Added

- Added support of Tickets 1.6.

### Changed

- Updated pdoTools version in the installer.

## [2.1.9 beta]

### Changed

- Fixed modification of order price by delivery and payment in default order handler.
- Fixed processing of decimal prices in PayPal payment class.
- Improved chunk tpl.msOrder.payment.

## [2.1.8 pl3]

### Changed

- Fixed controllers for MODX 2.3.
- Fixed routes to processors for MODX 2.3.
- Fixed product getlist processor for MODX 2.3.
- Fixed sorting products in category grid by clicking on column header.
- Disabled Bootstrap icons for MODX 2.3.
- Fixed product gallery for MODX 2.3.
- Fixed issue with deleting product files children in MODX 2.3.
- Fixed "autocomplete_err_noquery" error in MODX 2.3.
- [#148] Fixed duplicate connector.
- Fixed work of "minishop2-combo-user" in MODX 2.3.

## [2.1.8 beta]

### Added

- Added field "name" in object msOrderProduct for storing pagetitle of the product.
- Added integer field "type" to msOrder.

### Changed

- Fixed log level in PayPal method.
- Fixed CustomerProfile connection in schema.
- Improved price and weight formatting in orders table.
- Some UI improvements and fixes.

## [2.1.7 pl5]

### Changed

- [#131] Fixed update of product thumb when you update thumbnails.
- [#129] [msGetOrder] Fixed setting of placeholders.
- Fixed work with comments on product panel.
- [msOrder] Now snippet loads "building", "room" and "comment" from extended field of users profile.
- [mgr] Fixed parameter "maxUploadSize" in gallery.

## [2.1.7 pl1]

### Added

- [#113] Added Lithuanian lexicons.
- New system setting "ms2_category_remember_grid".

### Changed

- [#119] Improved compatibility with AjaxManager.
- [#118] Fixed negative cost in payment and delivery methods.
- [#112] Restrict cart items to specific contexts.
- [#111] Fixed remove of products links.
- [#107] Fixed empty customer field if fullname is not specified.
- [#106] Additional check of friendly filename in gallery.

## [2.1.6 pl4]

### Changed

- [#110] Fix generate thumbs on upload for Amazon S3.
- Fixed counting money spent in new customers.
- [#104] Fixed placeholder [[+cart_weight]] in emails.
- [#102] Improved checking of thumbnails url.
- [#98] Refactored permissions in processors.
- [#94] Formatted placeholder [[+cost]] in snippet msCart
- [#78] Fixed setting flag isfolder to false for old category of the product.
- Fixed handling of non-ajax requests.

### Removed

- Removed unnecessary ajax request on add to cart. Fixed possibly E_NOTICE.

## [2.1.5 pl]

### Added

- Added default media source in product "create" processor.
- Added default template in product "create" processor.
- Added buttons in orders management page.

### Changed

- Improved rename of files in gallery.

## [2.1.4 pl5]

### Added

- Added script for import products in core/components/minishop2/import/csv.php.

### Changed

- Fixed icons in chunks.
- [#95] Fixed price and weight format.
- Improved installator. Now you can update chunks on install.
- Fixed possible errors on thumbnail generation.
- Progressive thumbnails in gallery.

## [2.1.3 pl2]

### Added

- Support Bootstrap3.

### Changed

- Fixed E_WARNING in snippet msOptions.
- Fixed bug with php-apc on create order.

## [2.1.2 pl2]

### Changed

- Fixed possibly E_NOTICE in snippets.

## [2.1.2 pl]

### Added

- Added support of non-image files in gallery.
- Added ability to hide tabs of product page in manager. See new system settings.

### Changed

- [#77] Fixed change type of existing resource to "msProduct".
- Improved style of horizontal product tabs.
- Improved proportions in settings tab of category.
- Improved rename of product images.
- Improved retrieving of first thumbnail of image in gallery.
- If you specified wrong "ms2_product_thumbnail_size" parameter, gallery will still work.
- Improved snippet "msGallery" for display non-image files.
- [#84] Fixed displaying of  email of vendor in manager.

## [2.1.1 pl2]

### Changed

- Fixed parameter "&parents" in msProducts.

## [2.1.1 pl]

### Changed

- Snippet msProducts supports pdoTools 1.8.0. Parameter "&showHidden" enabled by default.
- Fixed fatal error with "clearCache" when msProduct created trough processor and it`s parent is not msCategory.
- Improved generation of thumbnails.

## [2.1.1 pl]

### Added

- Added support of component "msDiscount".
- Added counting of total spent sum by every customer in msCustomerProfile.

### Changed

- Fixed access permissions tab on product update.
- Fixed getPrice and getWeight calls in snippet msProducts.
- Improved xtype "minishop2-combo-user".

## [2.1.0 pl2]

### Changed

- Fixed placeholders on msProduct page due to issues with @INLINE chunks.

## [2.1.0 pl1]

### Added

- Added new events: "msOnGetProductPrice" and "msOnGetProductWeight".

### Changed

- Fixed wrong events in database from previous release.
- Changed "vendor_" to "vendor." in msProduct::toArray() for sameness with the snippet msProducts.
- Moved all logic from old action.php to new plugin. File leaved for compatibility with users modified javascript.

## [2.1.0 pl]

### Added

- Added method msPayment::getCost().
- New object "msCustomerProfile". It can be extended by plugins like "msProductData".
- Added new fields in "msProductFile": "hash" for sha1 of file and json field "properties".
- Added check for duplicate images in product gallery by checking hash of the content of file.
- Added new parameters for media source: "maxUploadWidth" and "maxUploadHeight" for frontend image resize.
- Added renaming files of product gallery together with thumbnails.
- [#73] Added virtual vendor fields. You can get it by $res->get(\'vendor_name\');
- [#65] Added new system events: "msOnBeforeValidateOrderValue" and "msOnValidateOrderValue".
- [#64] Added ability to stop switching order status from system plugin.
- [#63] Added new parameters for media source: "imageNameType". Switching to "friendly" will generate names for uploaded files by FURLs algorithm.
- [#61] Added ability to sort products in category by drag and drop.
- [#56] Added JSON field "properties" to "msProductFile".
- [#52] Added ability to customize orders in manager by 3 system setting: "ms2_order_grid_fields", "ms2_order_address_fields" and "ms2_order_product_fields".
- Added method PayPal::getPaymentLink() for continuing interrupted payment process. You will see [[+payment_link]] in emails.
- Added parameters "&tplSingle" and "&toSeparatePlaceholders" to snippet msGallery.

### Changed

- Changed default sort in goods grid on "menuindex, ASC".
- Improved method `msDelivery::getCost()`.
- Improved method msOrderHandler::getCost(). Now you can specify additional percent for delivery and payment in manager.
- Plugin "miniShop2" can automatic save referrers.
- In snippet "msProducts" you can override "where", "select", "leftJoin", "innerJoin" and "rightJoin" properties. Added pdoFetch 1.4.1 support.
- Improved other snippets.
- Changed uploader in product gallery to "Plupload" (Thanks to Alex Rahimov).
- Gallery upload processor now can receive parameters "id" and "file" for external images upload.
- [#77] Fixed changing type of existing resource to "msCategory".
- [#76] Fixed parameter "offset" in msGallery.
- [#75] Remove multi-category links when category removed.
- [#74] Refresh data in order from users profile if he is authenticated.
- [#66] Fixed saving payments methods when create a new delivery.
- [#62] Fixed work with "*.gif" files in products gallery.
- [#59] Improved regular expression for email verification.
- [#59] Improved validation of customer name and email when create order.
- [#59] msOrderHandler::add() now can return an error.
- [#59] Improved registration of javascript on frontend.
- [#59] Improved show\\hide of msMiniCart with css.
- [#59] Refactored default frontend javascript.
- [#59] Works with no javascript. (Thanks to Alexey Kartashov)
- [#58] Fixed PayPal non-USD currency.
- [#50] Fixed checking of the existence of the Tickets component.
- [#5] Possible fixed "Cannot execute queries while other unbuffered queries are active" on php < 5.3.
- Some fixes for MySql STRICT_TRANS_TABLES mode.
- Updated jQuery to version 1.10.2
- Gallery UI improvements for MODX 2.2.9
- Returned action.php for backward compatibility with the old javascript

## [2.0.1 pl3]

### Added

- Added german lexicon.

### Changed

- Now you can specify version of file in "ms2_frontend_js".
- [#60] Fixed type of field "index" in "msOrder".
- Improved listing of products in the categories of manager.

## [2.0.1 pl2]

### Changed

- Improved submit of order form.
- msProducts saves order of ids received through &resources=``. It need for smooth work with mSearch2.
- [mgr] Fixed search in vendors combo

## [2.0.1 pl1]

### Added

- Added loading of lexicons for 3rd party payment methods. They must be named in "msp.%name%.inc.php" format.
- Added placeholder [[+payment_link]] in the new user email. It will work only if payment method has function getPaymentLink(msOrder $order);
- [#45] Added system setting for specify default content of category.

### Changed

- [#53] Completely refactored call and processing plugin events.

### Removed

- Removed placeholder [[+id]] from product page because of issues.

## [2.0.1 pl]

### Added

- Added 2 new events on order remove: "msOnBeforeRemoveOrder" and "msOnRemoveOrder".

### Changed

- Improved classes: "msProduct" and "msCategory". Now `$modx->getCollection(\'msProduct\');` returns only products.

## [2.0.1 beta3]

### Changed

- Fixed msGallery

## [2.0.1 beta2]

### Added

- [#42] Added parameter "returnIds" to snippet msProducts.
- Added setting placeholder [[+idx]] to snippets msGallery and msProducts.
- Added parameter "where" in snippet msGallery, for specify JSON encoded string with additional query data.
- Added parameters "limit" and "offset" for pagination. msGallery can be used with getPage now.

### Changed

- [#44] Enabled duplicate of category.
- [#41] Fixed panel with tvs on product create.
- Parameter "resources" not suppressing "parents" in msProducts anymore. Now they working together: resources that are not in parents will not be returned.
- Snippet msGallery now can to display placeholders like [[+600x]] or [[+x600]].
- Fixed display an original image in msGallery. If upgrade, replace placeholders [[+image]] to [[+url]] in chunk "tpl.msGallery.row" manually.

## [2.0.1 beta1]

### Changed

- Maybe fixed bug with php-apc and sessions
- Fixed plugin params on events "msOnBeforeCreateOrder" and "msOnCreateOrder". Now you can change $msOrder by link.
- Fixed error with no changing status of order in manager.

## [2.0.1 beta]

### Added

- [#38] Added "menuindex" in product fields.
- [#35] Added 2 system setting to enable or disable the remembering of panel tabs.
- [#29] Added verification of object instance, when loading neighborhood resources in manager.
- New permissions for work with order: "save" and "view". New events for update order.
- Added ability to add\\update\\remove products in order.

### Changed

- [#37] Ability to override method miniShop2::changeOrderStatus() in custom order class.
- [#32] Enabled displaying of errors when uploading files in product gallery.
- [#30] "miniShopManagerPolicy" is automatically assigned to a group "Administrators".
- [#28] Returned the lost fields in images of msGallery.
- [#27] Improved ajax requests in default javascript.
- [#26] Improvements of categories tree.
- Fixed quick fields in snippet msOrder. Update your chunks for delivery and payment methods.
- Improved "totalVar" placeholder in snippet msGallery.
- Fixed model. Added proper primary keys for xPDOObjects.
- Ability to load only "miniShop2Config" object on frontend, without default javascript and jQuery.
- Fixed parameter "depth" in snippet "msProducts".

### Removed

- [#36] Removed filter_var(), because of issues on stupid hostings.
- [#25] Removed replacing of empty alias to id. Added 2 system setting for switching using resource id as alias for categories and products.

## [2.0.0 pl3]

### Changed

- Compatibility with pdoTools 1.2.0

## [2.0.0 pl2]

### Added

- Added ability to create system setting "ms2_cart_max_count" to override maximum number of products for one operation.
- Added system setting "ms2_price_snippet" for modification of product price.
- Added system setting "ms2_weight_snippet" for modification of product weight.

### Changed

- [mgr] Fixed formatting of dates in category grid.
- [mgr] Fixed decimals in product category grid.
- Fixed placeholders in emails subjects.
- Fixed generation of thumbnails in gallery for working with ImageMagick.
- Fixed link type "Many to many".
- Fixed requirement of non-existing permission "update_document" in processors.
- Product key in msCartHandler now generates with using "$price" and "$weight", because they can be modified when adding to cart.

## [2.0.0 pl1]

### Added

- Added selection of product links in snippet msProducts. See the new snippet properties.
- Added ability to use msProducts with any modResource class.
- Added property "tvPrefix" to msProducts for compatibility with getResources.
- Added property "outputSeparator" to snippets msOptions and msProducts.
- Added system parameter "ms2_price_format" for specifying how to format price of product.
- Added system parameter "ms2_price_format_no_zeros" for optional removing extra zeros at the end of price.
- Added system parameter "ms2_weight_format" for specifying how to format weight of product.
- Added system parameter "ms2_weight_format_no_zeros" for optional removing extra zeros at the end of weight.
- [mgr] New icons in tree

### Changed

- [mgr] Changing of product image now cleans its cache.
- Small improvements of the snippets at initialization.

## [2.0.0 rc6]

### Changed

- Fixed cleaning pdoTools in msGallery
- Improved saving payment method in order when quickly switch delivery.

## [2.0.0 rc5]

### Changed

- Integration of PayPal express-checkout payment method.

## [2.0.0 rc4]

### Changed

- Fixed bugs in snippets
- Fixed joining images by rank when includeThumbs.

## [2.0.0 rc]

### Added

- [mgr] Added displaying of nested products in categories. System setting "ms2_category_show_nested_products" can disable it.
- [mgr] Added the ability to link products together.
- [mgr] Added link to resource from ordered products.
- [mgr] Added ability to specify web document for Vendor by property "resource".
- [#10] Added checking for negative value of adding products in cart.
- [#12] Added regeneration site maps after new product create.
- [#14] Added check of "register_globals" on cart/add.
- Added system setting "ms2_product_thumbnail_size" for setting default size of product thumbnail.
- Added vendor placeholders on product page. Now you can use [[+vendor.name]], [[+vendor.logo]] etc.
- Added beta scripts for console converting miniShop1 to miniShop2.
- Added partial french translation.
- Added method miniShop2::getTagged() from MS1.
- Added ability to load plugins, that can add new or overload existing product fields in model and manager.
- Added parameters for joining thumbnails and tvs in snippets msProducts, msCart and msGetOrder.
- Improved save of product options.

### Changed

- [#6] Fixed error when order makes authenticated user without email.
- [#8] Fixed remove of order.
- [#9] Fixed date formatting in manager for working in Firefox.
- Fixed automatic install of pdoTools.
- Fixed fetching images in snippet msGallery
- Other fixes and improvements.

## [2.0.0 beta-1]

### Added

- Added manager pages
- Added create and manage orders

## [2.0.0 beta-0]

- Initial release.
',
    'license' => 'GNU GENERAL PUBLIC LICENSE
    Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS
',
    'readme' => '--------------------
miniShop2
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
Owner: MODX RSC – Russian Speaking Community  https://github.com/modx-pro
Support and development  Nikolay Savin https://t.me/biz87
With questions and problems - contact the https://modx.pro  AND  https://t.me/ru_modx
--------------------

Feel free to suggest ideas/improvements/bugs on GitHub:
https://github.com/modx-pro/miniShop2


',
    'chunks' => 
    array (
      0 => 'msProduct.content',
      1 => 'msProduct.content.fenom',
      2 => 'tpl.msProducts.row',
      3 => 'tpl.msCart',
      4 => 'tpl.msCartNew',
      5 => 'tpl.msMiniCart',
      6 => 'tpl.msOrder',
      7 => 'tpl.msGetOrder',
      8 => 'tpl.msOptions',
      9 => 'tpl.msProductOptions',
      10 => 'tpl.msGallery',
      11 => 'tpl.msGalleryNew',
      12 => 'tpl.msEmail',
      13 => 'tpl.msEmail.new.user',
      14 => 'tpl.msEmail.new.manager',
      15 => 'tpl.msEmail.paid.user',
      16 => 'tpl.msEmail.paid.manager',
      17 => 'tpl.msEmail.sent.user',
      18 => 'tpl.msEmail.cancelled.user',
    ),
    'setup-options' => 'minishop2-4.1.5-pl/setup-options.php',
    'requires' => 
    array (
      'php' => '>=7.0.0',
      'modx' => '<3.0.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'b7d0dbd488a6dcc3bfcdd7c2cf10aa48',
      'native_key' => 'minishop2',
      'filename' => 'modNamespace/71cc455db1b362463260530228f1f555.vehicle',
      'namespace' => 'minishop2',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e0da334ee17b742b5d6da5d52a0534b5',
      'native_key' => 'mgr_tree_icon_mscategory',
      'filename' => 'modSystemSetting/a0fffcb87eb4d9a2f9b17900e6fbd29b.vehicle',
      'namespace' => 'minishop2',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dbf0a848be9f60db166b9aff69677966',
      'native_key' => 'mgr_tree_icon_msproduct',
      'filename' => 'modSystemSetting/51c65ad9db02e4073d0d26bbdd8a9903.vehicle',
      'namespace' => 'minishop2',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f9924cddf5d0b8c29e5a06e13ed9dc6f',
      'native_key' => 'ms2_services',
      'filename' => 'modSystemSetting/8e111c88f3a5d0adc192a89c48b9c157.vehicle',
      'namespace' => 'minishop2',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cac15346631adcb32a2b644ddb57cf30',
      'native_key' => 'ms2_plugins',
      'filename' => 'modSystemSetting/bd4f878352103b446cba9c86e4446e8b.vehicle',
      'namespace' => 'minishop2',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f8dd0d6094e76a812736ca024c188772',
      'native_key' => 'ms2_chunks_categories',
      'filename' => 'modSystemSetting/5a7cb02146086be4ae2ce717ae8c6006.vehicle',
      'namespace' => 'minishop2',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3fc952d283c38df37378d31ce530cb0b',
      'native_key' => 'ms2_tmp_storage',
      'filename' => 'modSystemSetting/e5b11db4350e654e2789db226c44af4e.vehicle',
      'namespace' => 'minishop2',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1041bd3c1a38453f2d353fc6f2ba2520',
      'native_key' => 'ms2_use_scheduler',
      'filename' => 'modSystemSetting/88438db7b341982f67f6f12bda332811.vehicle',
      'namespace' => 'minishop2',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0df54260e0fdce0240b83c6e9dc49f32',
      'native_key' => 'ms2_category_grid_fields',
      'filename' => 'modSystemSetting/beb7d9f59d286125032ac6e7e88dc887.vehicle',
      'namespace' => 'minishop2',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a29a3773fdb61dd7a5cf13f57cc4675',
      'native_key' => 'ms2_category_show_nested_products',
      'filename' => 'modSystemSetting/110435561bd0a3258778d4419b385bef.vehicle',
      'namespace' => 'minishop2',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '007e00c184ca21b8c1fad81bba959b76',
      'native_key' => 'ms2_category_show_comments',
      'filename' => 'modSystemSetting/c4c60ef213c17079b05d55803de7ce6f.vehicle',
      'namespace' => 'minishop2',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c5496949b40bdc5be3a1b364c5515b2e',
      'native_key' => 'ms2_category_show_options',
      'filename' => 'modSystemSetting/fbc6e722f9992b650e6f0116522a0a4a.vehicle',
      'namespace' => 'minishop2',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b59127f60d9868904b4f27b662e6315',
      'native_key' => 'ms2_category_remember_tabs',
      'filename' => 'modSystemSetting/e5cee3bb5c6fd5a4df5a98cbfa404e64.vehicle',
      'namespace' => 'minishop2',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c36d6c2396299dc40726a9045f6cb5d4',
      'native_key' => 'ms2_category_id_as_alias',
      'filename' => 'modSystemSetting/f416b5ac744732bd9c896ce0dc4ce6ce.vehicle',
      'namespace' => 'minishop2',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '682d941fd86b4f656e99ce3a1c70e0d7',
      'native_key' => 'ms2_category_content_default',
      'filename' => 'modSystemSetting/eb7a23ae14a14a4f9166806c7d3baf6f.vehicle',
      'namespace' => 'minishop2',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6f7458a45e1f4ade2d0d68957b2ca97e',
      'native_key' => 'ms2_template_category_default',
      'filename' => 'modSystemSetting/70ab11cd04b8f346e099e09eb39753c9.vehicle',
      'namespace' => 'minishop2',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2a0fe3d0dd024e4766cb001ea07a56b8',
      'native_key' => 'ms2_product_extra_fields',
      'filename' => 'modSystemSetting/88424ee2731055b3552115ea7f2896c7.vehicle',
      'namespace' => 'minishop2',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3985fa7845747fe252a76cdc0f6815a2',
      'native_key' => 'ms2_product_show_comments',
      'filename' => 'modSystemSetting/a718eefcee6dd2c19b3d5d20d9d86eac.vehicle',
      'namespace' => 'minishop2',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd03270633d34f964bfd588ef23e85529',
      'native_key' => 'ms2_template_product_default',
      'filename' => 'modSystemSetting/9f6cd0be31ea383a6146a13bdee6bc6c.vehicle',
      'namespace' => 'minishop2',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3409b7ed6526b662cff2a6edf710f1c3',
      'native_key' => 'ms2_product_show_in_tree_default',
      'filename' => 'modSystemSetting/c83179ff690b19b921aee102087e5cbd.vehicle',
      'namespace' => 'minishop2',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f77d5f15ffa2380453bd06f826be127',
      'native_key' => 'ms2_product_source_default',
      'filename' => 'modSystemSetting/612d5842611703c913573ae6609c0ccb.vehicle',
      'namespace' => 'minishop2',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1cedc3aa8d0c16702417f89b4119db7f',
      'native_key' => 'ms2_product_thumbnail_default',
      'filename' => 'modSystemSetting/d17462f150668569dff439a2e106d30a.vehicle',
      'namespace' => 'minishop2',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '68f50adb6b4ed94faa1b3644d91d7df6',
      'native_key' => 'ms2_product_thumbnail_size',
      'filename' => 'modSystemSetting/c5814e56e6d24f153d6a485301a32412.vehicle',
      'namespace' => 'minishop2',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1d87e276b0689343c77057b0d7014dee',
      'native_key' => 'ms2_product_remember_tabs',
      'filename' => 'modSystemSetting/de1e3564f88e8a94419ae2a275c5fbac.vehicle',
      'namespace' => 'minishop2',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9273f491098391fc2eb40a240f7471f4',
      'native_key' => 'ms2_product_id_as_alias',
      'filename' => 'modSystemSetting/48d92418bbad5664e772dc8a89752a12.vehicle',
      'namespace' => 'minishop2',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bf46616342b9626ffe7a91e7bb6402d8',
      'native_key' => 'ms2_price_format',
      'filename' => 'modSystemSetting/1097d88e53be37051cc0302022a2051e.vehicle',
      'namespace' => 'minishop2',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e43f0b668ce669398322a119c4869ced',
      'native_key' => 'ms2_weight_format',
      'filename' => 'modSystemSetting/b028efd5df3bd7fe397e37488d6de2bc.vehicle',
      'namespace' => 'minishop2',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8c6e329c50dc64107a06e6adb55e1b46',
      'native_key' => 'ms2_price_format_no_zeros',
      'filename' => 'modSystemSetting/0edbc3f45af55a9a218ee15d094677b8.vehicle',
      'namespace' => 'minishop2',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bdc8cf7208da8fe4f64812a7502543ac',
      'native_key' => 'ms2_weight_format_no_zeros',
      'filename' => 'modSystemSetting/234cd1cb85f428f18f21504889ea9a52.vehicle',
      'namespace' => 'minishop2',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c5a87044dfbe9476e6c1eb25c6079291',
      'native_key' => 'ms2_product_tab_extra',
      'filename' => 'modSystemSetting/a675c00b2159aaa096a1a315e78e62f9.vehicle',
      'namespace' => 'minishop2',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '15a193adabfc5348bf18cc8455d93cf5',
      'native_key' => 'ms2_product_tab_gallery',
      'filename' => 'modSystemSetting/9912b050a9ecf68eea905937a10b406f.vehicle',
      'namespace' => 'minishop2',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7faa06db97856a2946afe61191738ab',
      'native_key' => 'ms2_product_tab_links',
      'filename' => 'modSystemSetting/ca020bdef69fff491dc05e1914d4715d.vehicle',
      'namespace' => 'minishop2',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd843601b79b67efe816e76620fa57c34',
      'native_key' => 'ms2_product_tab_options',
      'filename' => 'modSystemSetting/a03a0861ab9ffa187c7f8ecca5183eee.vehicle',
      'namespace' => 'minishop2',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3aa97c4ee0ef6371654cdc9124fd9837',
      'native_key' => 'ms2_product_tab_categories',
      'filename' => 'modSystemSetting/5431997674dac6fe1d9230f2b93a1507.vehicle',
      'namespace' => 'minishop2',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0b0032c2454b2494f3c9219ce1cd3e27',
      'native_key' => 'ms2_cart_handler_class',
      'filename' => 'modSystemSetting/5b4aa4cc8265a7670a6484d6c8658cc0.vehicle',
      'namespace' => 'minishop2',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '59053d9505748db1e419fb30c75393da',
      'native_key' => 'ms2_cart_context',
      'filename' => 'modSystemSetting/f80075ea44f3fb553304594d8f75e3d5.vehicle',
      'namespace' => 'minishop2',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c729637669f3ac0de84ca224a8c53e0d',
      'native_key' => 'ms2_cart_max_count',
      'filename' => 'modSystemSetting/ced0e750e3b5c6e1a451b2eb35a1e8e8.vehicle',
      'namespace' => 'minishop2',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '04a01bd74da749abbd19935ac37f1a51',
      'native_key' => 'ms2_cart_product_key_fields',
      'filename' => 'modSystemSetting/373347796c131f0abc7a56cd7cbe689e.vehicle',
      'namespace' => 'minishop2',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b077ffd944b766188b60865a2d4b7be9',
      'native_key' => 'ms2_order_format_phone',
      'filename' => 'modSystemSetting/9119720de7024183e05ef1c2d9c6e436.vehicle',
      'namespace' => 'minishop2',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6b5e84c2b45e30889b736c2ac01345f5',
      'native_key' => 'ms2_order_format_num',
      'filename' => 'modSystemSetting/bfbd708440cf53d7ec53128ffeba376c.vehicle',
      'namespace' => 'minishop2',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b5ee1ebcaf90d7f8b35f839242093fa2',
      'native_key' => 'ms2_order_format_num_separator',
      'filename' => 'modSystemSetting/28d8fe3f8712fe1d257cbfc1c125c980.vehicle',
      'namespace' => 'minishop2',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3bea146525fa56d6f1f537402217dffb',
      'native_key' => 'ms2_order_grid_fields',
      'filename' => 'modSystemSetting/8450578f155068172ff867007aa0a8cc.vehicle',
      'namespace' => 'minishop2',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad7282afb39590984f4ddcfe75825fec',
      'native_key' => 'ms2_order_address_fields',
      'filename' => 'modSystemSetting/9313dd1829fd8a047f1b0575a77dab94.vehicle',
      'namespace' => 'minishop2',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '80bf630b202c4778b6734bc0c5f7b72a',
      'native_key' => 'ms2_order_product_fields',
      'filename' => 'modSystemSetting/1e01e4bc7c4cca586d76bfadc6a58b3c.vehicle',
      'namespace' => 'minishop2',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ff283c178d12e0d7eba238ba29cbddd5',
      'native_key' => 'ms2_order_product_options',
      'filename' => 'modSystemSetting/f2c3fd9de1da48c2f1296db10d501120.vehicle',
      'namespace' => 'minishop2',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '321e3702b105e56396f262c86872bc15',
      'native_key' => 'ms2_order_tv_list',
      'filename' => 'modSystemSetting/1343d9ef56f01295b9e263dde51d88c9.vehicle',
      'namespace' => 'minishop2',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '26ea33a9c05ffd4befb53ddc0059a89c',
      'native_key' => 'ms2_order_handler_class',
      'filename' => 'modSystemSetting/4b15e6c3cafb793f82ad23baea998094.vehicle',
      'namespace' => 'minishop2',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a35ce9d834e3c691e8b777bbf7a49738',
      'native_key' => 'ms2_order_user_groups',
      'filename' => 'modSystemSetting/f6fff6ad41a2b5085f839da5203e93bb.vehicle',
      'namespace' => 'minishop2',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65f529bed86267009fee9add0f33e50b',
      'native_key' => 'ms2_date_format',
      'filename' => 'modSystemSetting/9606bdc850d03d8598ea0b692d9ca0bb.vehicle',
      'namespace' => 'minishop2',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b462d72cbcc2ccb5c2546e765eb0807b',
      'native_key' => 'ms2_email_manager',
      'filename' => 'modSystemSetting/ee28d2794760eed9276b3e1c8b46294f.vehicle',
      'namespace' => 'minishop2',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '82f3b26543c4e9160e6113eaff28c0f0',
      'native_key' => 'ms2_frontend_css',
      'filename' => 'modSystemSetting/812f808815998184197cc51c7cc2944e.vehicle',
      'namespace' => 'minishop2',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ca02396b0d9b1fbd678025308029f8fb',
      'native_key' => 'ms2_frontend_message_css',
      'filename' => 'modSystemSetting/9d2753120eb68f7c23af58209df23c47.vehicle',
      'namespace' => 'minishop2',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '904508826b55b5870456b5a7849340e5',
      'native_key' => 'ms2_frontend_js',
      'filename' => 'modSystemSetting/8ebc2f17349d462dc64ecdd622a59625.vehicle',
      'namespace' => 'minishop2',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e43859fb29fdcde9f3a176ae89ae5e35',
      'native_key' => 'ms2_frontend_message_js',
      'filename' => 'modSystemSetting/dc7d569ad17935764a4aeeb5be2e35e5.vehicle',
      'namespace' => 'minishop2',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2314f47c324f89abeafc6e2dca967cda',
      'native_key' => 'ms2_frontend_message_js_settings',
      'filename' => 'modSystemSetting/6cd6cd957dc1241ee4846e0fb67a9886.vehicle',
      'namespace' => 'minishop2',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8d2b2848da062dc809122b3ba475f721',
      'native_key' => 'ms2_register_frontend',
      'filename' => 'modSystemSetting/99cce8c1d951f1369412415952a4251a.vehicle',
      'namespace' => 'minishop2',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '93e703a30a24ecfbf2bfb41158388e6c',
      'native_key' => 'ms2_toggle_js_type',
      'filename' => 'modSystemSetting/516f6fe15e6dbdecff9a1683c6e60f1b.vehicle',
      'namespace' => 'minishop2',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8cab75af5c147f1d585cf11a9cabe1ca',
      'native_key' => 'ms2_vanila_js',
      'filename' => 'modSystemSetting/29a354b378d17d0b35951657bf126c89.vehicle',
      'namespace' => 'minishop2',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'da23ea899609f19dc87a7b402d0c01a7',
      'native_key' => 'ms2_frontend_notify_js_settings',
      'filename' => 'modSystemSetting/eff5b0227ef40dac0f3fa8f7f8602e28.vehicle',
      'namespace' => 'minishop2',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ba6f500c4a019c13a8eb14bf208c95ec',
      'native_key' => 'ms2_cart_js_class_path',
      'filename' => 'modSystemSetting/b253cadc5d0f4d5b1760c53074186a8b.vehicle',
      'namespace' => 'minishop2',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cca05bb6ffe6c65e8775700cabcdc16e',
      'native_key' => 'ms2_cart_js_class_name',
      'filename' => 'modSystemSetting/04216ffd5ac1384b86875c298a06835a.vehicle',
      'namespace' => 'minishop2',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0d70868a859a2e34626f60d0d06d60ab',
      'native_key' => 'ms2_order_js_class_path',
      'filename' => 'modSystemSetting/87ef749a49e1fe0a8357ac772d748358.vehicle',
      'namespace' => 'minishop2',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '13a42e241ba0c339ae3f433c60ee1c6e',
      'native_key' => 'ms2_order_js_class_name',
      'filename' => 'modSystemSetting/30c05f793a45a1ce7ab157aef44f7e88.vehicle',
      'namespace' => 'minishop2',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dd5f38b9fed1420ebf76a7a7afb26c47',
      'native_key' => 'ms2_notify_js_class_path',
      'filename' => 'modSystemSetting/5d778023384a54f67f82adecf9c5d76a.vehicle',
      'namespace' => 'minishop2',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '694030667a06d9371e5dc5e631deeb78',
      'native_key' => 'ms2_notify_js_class_name',
      'filename' => 'modSystemSetting/b340ce2fcb5c86c3ae96dfdbfda3d6bd.vehicle',
      'namespace' => 'minishop2',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bc1e04a6d1927f1faa2481f34b642aad',
      'native_key' => 'ms2_status_draft',
      'filename' => 'modSystemSetting/633719fed464a5c7c5b9dd65f0037517.vehicle',
      'namespace' => 'minishop2',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '27592ffb8a1fe22a00abae00013d0f16',
      'native_key' => 'ms2_status_new',
      'filename' => 'modSystemSetting/04fff0e3692977138bd138339f0860cc.vehicle',
      'namespace' => 'minishop2',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6529e46a266b6ae29cae599ac9512c96',
      'native_key' => 'ms2_status_paid',
      'filename' => 'modSystemSetting/04e08fbc367839bbc1ef4262f5596e28.vehicle',
      'namespace' => 'minishop2',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4145025a3916201ba6ab51ff5e271218',
      'native_key' => 'ms2_status_canceled',
      'filename' => 'modSystemSetting/3e8ed6d6125b7cd61d4cd3a9ccc8bacc.vehicle',
      'namespace' => 'minishop2',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '80504d38fcda3a61f79ad33e04cfd2f4',
      'native_key' => 'ms2_status_for_stat',
      'filename' => 'modSystemSetting/c9d8d96221bd51ebed7cbbf071e6c8d7.vehicle',
      'namespace' => 'minishop2',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '239e76e7ca8eb9b8b4f801bcc0aa927b',
      'native_key' => 'msOnBeforeAddToCart',
      'filename' => 'modEvent/27a99d23451f13ac7753b5fdf8a893cd.vehicle',
      'namespace' => 'minishop2',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ae92691a43d5290c7b95bad5fecf767e',
      'native_key' => 'msOnAddToCart',
      'filename' => 'modEvent/705acae0c370fbab2f25a79ee37e8117.vehicle',
      'namespace' => 'minishop2',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'dafc55f96ec5a039d038884b6948855d',
      'native_key' => 'msOnBeforeChangeInCart',
      'filename' => 'modEvent/90af9975b24f929351e7d226d1376f9c.vehicle',
      'namespace' => 'minishop2',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '41b30eef853cfa3e4990ef799374bc08',
      'native_key' => 'msOnChangeInCart',
      'filename' => 'modEvent/12976f1cb7e5cf57d0e2d0a2719a2c4b.vehicle',
      'namespace' => 'minishop2',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ee678d7b0736b62c2a990175f400cdec',
      'native_key' => 'msOnBeforeRemoveFromCart',
      'filename' => 'modEvent/77a55d4c63e8b9cd5e88b0cbf2a848ad.vehicle',
      'namespace' => 'minishop2',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '73fff6786b855d082063e4e98c789ab9',
      'native_key' => 'msOnRemoveFromCart',
      'filename' => 'modEvent/2d4da514bf6ab8f78d020c16f0a885e8.vehicle',
      'namespace' => 'minishop2',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '5e5e5b95ce9e88bf04810d4c9da5a04a',
      'native_key' => 'msOnBeforeEmptyCart',
      'filename' => 'modEvent/d6eb433c81c1e885fa84ad8ce77bc7c8.vehicle',
      'namespace' => 'minishop2',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1da2b98f48b388bfd72d7957a1d57de3',
      'native_key' => 'msOnEmptyCart',
      'filename' => 'modEvent/80efaaf2f5a2919fb3f9e79131353d07.vehicle',
      'namespace' => 'minishop2',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b8a37ee0bdfa8ae35ba29619e9eaad20',
      'native_key' => 'msOnGetStatusCart',
      'filename' => 'modEvent/74e44b8890206a0d33645fe2ad3b88f6.vehicle',
      'namespace' => 'minishop2',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '47fc04cab656c2fa7d5c341c920169a2',
      'native_key' => 'msOnBeforeAddToOrder',
      'filename' => 'modEvent/443861903883ce0ac7e6e4d26faba0a9.vehicle',
      'namespace' => 'minishop2',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '742e1e7ea1ebe83dedf343549bb9ccc2',
      'native_key' => 'msOnAddToOrder',
      'filename' => 'modEvent/3bdb8db6692b0c6b75b5b99384a4cec5.vehicle',
      'namespace' => 'minishop2',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6c72deb56644a639db8af8dc1db0599e',
      'native_key' => 'msOnBeforeValidateOrderValue',
      'filename' => 'modEvent/2f5e373433bbe3e26c522d9ed8a34a8b.vehicle',
      'namespace' => 'minishop2',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '572b5da07b335a62ce1bf197bd98e6dd',
      'native_key' => 'msOnValidateOrderValue',
      'filename' => 'modEvent/b6efa8c9aeffe2211ff0d25b17d24adf.vehicle',
      'namespace' => 'minishop2',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '71dd5fd40b8bd0ddc898eca97ce02f4b',
      'native_key' => 'msOnBeforeRemoveFromOrder',
      'filename' => 'modEvent/0868e63eb58ee592ddb60ef02797197d.vehicle',
      'namespace' => 'minishop2',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'fd452c69d1a912c1f79e403d5fc0c82a',
      'native_key' => 'msOnRemoveFromOrder',
      'filename' => 'modEvent/977c7588021536727cbca97f458a3b5c.vehicle',
      'namespace' => 'minishop2',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4ffc35cdc95064d798cd4401d8d7e394',
      'native_key' => 'msOnBeforeEmptyOrder',
      'filename' => 'modEvent/0d9da03571cff870254d61764fddc29b.vehicle',
      'namespace' => 'minishop2',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e73e3719882e57412b7fcc740041f231',
      'native_key' => 'msOnEmptyOrder',
      'filename' => 'modEvent/5a341503637ddfd006630790f2de9590.vehicle',
      'namespace' => 'minishop2',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'fa9681d9bbc5c714a03890ece59e2c6b',
      'native_key' => 'msOnBeforeGetOrderCost',
      'filename' => 'modEvent/45fb7ff0e519b12ed5fb5e14f3f31936.vehicle',
      'namespace' => 'minishop2',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2494916aa2e1cbbc6d650c6116feee24',
      'native_key' => 'msOnGetOrderCost',
      'filename' => 'modEvent/22a3849d5a19fba7b7dd42e8e95d6196.vehicle',
      'namespace' => 'minishop2',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0b80b389c0032b51d915ecab1db41a2d',
      'native_key' => 'msOnSubmitOrder',
      'filename' => 'modEvent/34c8dde4e013a347bc5546840d369e5c.vehicle',
      'namespace' => 'minishop2',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '10e1b219c53e21d7af990c07aeb2f2bf',
      'native_key' => 'msOnBeforeChangeOrderStatus',
      'filename' => 'modEvent/98497032ab5aff30b42a3fdfc25fb2f8.vehicle',
      'namespace' => 'minishop2',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '24ff75fa827fe8ce572f683c35005a56',
      'native_key' => 'msOnChangeOrderStatus',
      'filename' => 'modEvent/b54c3d60006f3959e26d79a2a8847843.vehicle',
      'namespace' => 'minishop2',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6689977e9d3a533642e22790982e763c',
      'native_key' => 'msOnBeforeGetOrderCustomer',
      'filename' => 'modEvent/da31c417d538de1a22bdb67202ebc987.vehicle',
      'namespace' => 'minishop2',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1737d654062d78d2c10de23c82370eaf',
      'native_key' => 'msOnGetOrderCustomer',
      'filename' => 'modEvent/e6f17d8b3c1a7004d39ce4922f85d869.vehicle',
      'namespace' => 'minishop2',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0c7f4069d37949ccbc38c0e5daa7d0ef',
      'native_key' => 'msOnBeforeCreateOrder',
      'filename' => 'modEvent/b33cf8ef16c717244752ff027376fd1a.vehicle',
      'namespace' => 'minishop2',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '57992b49f6ed1aba4f8c73ef5ad5fad2',
      'native_key' => 'msOnBeforeMgrCreateOrder',
      'filename' => 'modEvent/bf648ec82d9a707e397552d390e9cda2.vehicle',
      'namespace' => 'minishop2',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ccd1b1f4c2ef2190ca2942a4254f8848',
      'native_key' => 'msOnCreateOrder',
      'filename' => 'modEvent/43f470543828a8599332c785bfc161e5.vehicle',
      'namespace' => 'minishop2',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '347e14d64ff0e9f2ce52581101869d12',
      'native_key' => 'msOnMgrCreateOrder',
      'filename' => 'modEvent/66f97e00e79f2ca077dac38e2d17d95f.vehicle',
      'namespace' => 'minishop2',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2b0bc54c1e83d91f057346c8872e9ce6',
      'native_key' => 'msOnBeforeUpdateOrder',
      'filename' => 'modEvent/d30fd4f1b9589be4b50d13d33fae2632.vehicle',
      'namespace' => 'minishop2',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cba76e394cb3dbe2086ab3bd88fbb783',
      'native_key' => 'msOnUpdateOrder',
      'filename' => 'modEvent/701e10a63d4996f4daeb365266c71be2.vehicle',
      'namespace' => 'minishop2',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c56e2fadef5119aa226a7cc377e9b0f2',
      'native_key' => 'msOnBeforeSaveOrder',
      'filename' => 'modEvent/ea2b9d6b75425909572eacfce8c1d653.vehicle',
      'namespace' => 'minishop2',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '5130c477398320d64a92fe866d5f7fe6',
      'native_key' => 'msOnSaveOrder',
      'filename' => 'modEvent/3040c306fe47df19c89d0e0f40b9dcfd.vehicle',
      'namespace' => 'minishop2',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6e71441bd11f49480fd4754108932250',
      'native_key' => 'msOnBeforeRemoveOrder',
      'filename' => 'modEvent/8a91c3473b0be2a31a2c317503e25e5e.vehicle',
      'namespace' => 'minishop2',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '645d702e8f537ab77cc2e2a52245dd66',
      'native_key' => 'msOnRemoveOrder',
      'filename' => 'modEvent/25c93ee533c695f2109bf4c5ac5e8af6.vehicle',
      'namespace' => 'minishop2',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '7d33c173db85d0e7738e92ad18e16627',
      'native_key' => 'msOnBeforeCreateOrderProduct',
      'filename' => 'modEvent/9db6e5608d7ce1c180bc4562ef68489c.vehicle',
      'namespace' => 'minishop2',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd8045fccc7f3c37265392587cbcbb510',
      'native_key' => 'msOnCreateOrderProduct',
      'filename' => 'modEvent/9a35761467e0a46786d4d3b7d00f60e2.vehicle',
      'namespace' => 'minishop2',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8daf7a4ee0fed9cd9702202276918e56',
      'native_key' => 'msOnBeforeUpdateOrderProduct',
      'filename' => 'modEvent/0ad0b454eaf7e1f40ca4e87d7270e561.vehicle',
      'namespace' => 'minishop2',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '595b766e7605868862e0a0691f620390',
      'native_key' => 'msOnUpdateOrderProduct',
      'filename' => 'modEvent/eb4e0af5f9aa32a442fe34aa0411d9cd.vehicle',
      'namespace' => 'minishop2',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '55072b605d8c85f7b25e60cdf49b5570',
      'native_key' => 'msOnBeforeRemoveOrderProduct',
      'filename' => 'modEvent/635343465f965bb1b3aa58df24f64958.vehicle',
      'namespace' => 'minishop2',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e19e6ae87b7424d3ea6b034b3acfb80d',
      'native_key' => 'msOnRemoveOrderProduct',
      'filename' => 'modEvent/79bd6ad9424e90429239596495d5786e.vehicle',
      'namespace' => 'minishop2',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '438bbdafa8efe03962082c841794364c',
      'native_key' => 'msOnGetProductPrice',
      'filename' => 'modEvent/a22ea0f0ea254ae2d2905d5b86c7ebb5.vehicle',
      'namespace' => 'minishop2',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'bb56d8a01a8233762828947a9249f7a6',
      'native_key' => 'msOnGetProductWeight',
      'filename' => 'modEvent/694d9664b20aa1057d3305761c2c1b64.vehicle',
      'namespace' => 'minishop2',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'db49741b1354984f6e50a38a96e0f4a7',
      'native_key' => 'msOnGetProductFields',
      'filename' => 'modEvent/ca5fc2c4ea10a7282662895ac7896fe3.vehicle',
      'namespace' => 'minishop2',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '618c5cccece87a1ed84d6d43c9b982e2',
      'native_key' => 'msOnManagerCustomCssJs',
      'filename' => 'modEvent/3fe10cca3126ceeb901e5feee681fcac.vehicle',
      'namespace' => 'minishop2',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => '825fb6c309c8c179172d8325765d17a4',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/d3870390e42bda7852ef77e0f09dce84.vehicle',
      'namespace' => 'minishop2',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => 'e425cc3a28876e213697eb88444c1746',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/4355527ff1b9f94dadd293abbe312373.vehicle',
      'namespace' => 'minishop2',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '95cebbf8a2a8d3d9d7d425b6878dab88',
      'native_key' => 'minishop2',
      'filename' => 'modMenu/b2b7036328c0f8bf9012b7b014e7167c.vehicle',
      'namespace' => 'minishop2',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'cf5b0ee4529371963eedb48e8f3f5f1b',
      'native_key' => 'ms2_orders',
      'filename' => 'modMenu/9abc13ff45b36d8a01c30ad41c04d6a6.vehicle',
      'namespace' => 'minishop2',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'd43c0ded50a8b848dc4264325368da9f',
      'native_key' => 'ms2_settings',
      'filename' => 'modMenu/4788b82ee07ee3d23263f60863326f15.vehicle',
      'namespace' => 'minishop2',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'c3d2c921a855bf527183ab961eaca14c',
      'native_key' => 'ms2_system_settings',
      'filename' => 'modMenu/56d9d02cd2aaa2d8ab09fa88fc5253d1.vehicle',
      'namespace' => 'minishop2',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '2ff77a7fcebf219529d44b6da94a3154',
      'native_key' => 1,
      'filename' => 'modCategory/e0591f5c6c112e225adc350d0322562e.vehicle',
      'namespace' => 'minishop2',
    ),
  ),
);