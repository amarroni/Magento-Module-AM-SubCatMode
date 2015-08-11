#arvato Customization Module

##Table of Contents
1.	About this Guide  
2.	Frontend Functionality Overview  
2.1. Faster auto-complete search  
3.	Backend Functionality Overview  
3.1.	Disabling of RSS Feeds  
3.2.	Export feature configurable via permissions  
3.3.	Order status not changeable in "Comments History"  
3.4.	Removes the "Get help for this page" link  
3.5.	Uneditable orders after shipment creation  
3.6.	New column "Category" in CMS Page grid and detail page  
3.7.    New column "Class ID" in Product and Customer Tax Classes pages  
3.8.    "Billing Agreements" tab configurable via permissions  
3.9.    "Recurring Profiles" tab configurable via permissions  
3.10.   Disallow to maintain inventory via permissions  
3.11.	Disable buttons in the admin panel  
3.12.   Renaming of "Comments History" to "Comments History Summary" in the admin panel  
3.13.   Custom ACL for config cache
3.14.   Hide refund trigger controls

##1	About this Guide
This guide describes the usage of the arvato Customization Module.
The module configures and changes certain functionalities and aspects of a Magento installation as requested by the Magento core Project Management team (a.k.a. Hauke ;). 

##2	Frontend Functionality Overview
###2.1 Faster auto-complete search
The module sets the time needed to open the search auto-complete drop down box from 400 to 100 milliseconds, resulting in a much better responsiveness of the search feature.

##3 Backend Functionality Overview
###3.1 Disabling of RSS Feeds
The module disables the RSS Feed feature (like "New Order RSS" in the "Sales / Orders" section of the Magento backend).
###3.2 Export feature configurable via permissions
The display of the "Export to" drop down box on the "Sales / Orders" and "Customers / Manage Customers" pages can be controlled via the "System / Import/Export / Customer and Order Export" permission.
###3.3 Order status not changeable in "Comments History"
The "Status" drop down box in the "Comments History" of the "Order View" in the Magento backend is disable, so that effectively no order status change can be triggered from the backend directly.
###3.4 Removes the "Get help for this page" link
The "Get help for this page" link is removed for all pages from the menu bar.
###3.5 Uneditable orders after shipment creation
Once a shipment for an order has been created, the order is not editable in the backend anymore.
###3.6 New column "Category" in CMS Page grid and detail page
A new column "Category" has been added to both the CMS Page grid view and the details page.
###3.7 New column "Class ID" in Product and Customer Tax Classes pages
A new column "Class ID" has been added to the "Product Tax Classes" page and the "Customer Tax Classes" page.
###3.8 "Billing Agreements" tab configurable via permissions
The "Billing Agreements" tab on the "Customers / Manage Customers" page can be displayed or hidden via the "Customers / Billing Agreements" permission.
###3.9 "Recurring Profiles" tab configurable via permissions
The "Recurring Profiles (beta)" tab on the "Customers / Manage Customers" page can be displayed or hidden via the "Customers / Recurring Profiles" permission.
###3.10 Disallow to maintain inventory via permissions
The permission "Manage Products / Edit Inventory" can be used to enable or disable the editing of the inventory on the "Inventory" tab of the "Product Information" page.
###3.11 Disable buttons in the admin panel
Some standard features of Magento are handled by SAP and must therefore be disabled:

- "Ship" button for orders
- "Invoice" button for orders
- "Hold" button for orders

![Screenshot: Disable Order Form Buttons in the Admin Panel](files/Features/Order-Buttons/Screenshot-Disabled-Order-Form-Buttons-in-the-Admin-Panel.png)
###3.12 Renaming of "Comments History" to "Comments History Summary" in the admin panel
The QA department (= Björn Feldhaus) requested a renaming of the "Comments History" section in the order details page of the admin panel to "Comments History Summary", because the existing name could easily lead to confusion because a tab of the same name exists on that screen.

###3.13 Under the regular cache setting ACL is now a node "Arvato config cache flush". If this is not allowed for a backend user, the config cache and the flush all cache buttons will be hidden and the execution is disallowed via observers.

###3.14 Hide refund trigger controls

It is poosible to hide the "Cancel Order" and "Create Credit Memo" Buttons for Orders placed in some specific store view.
If the approppritate configuraton item is set to "yes" it will hide these buttons on the frontend but also in the admihtml.
