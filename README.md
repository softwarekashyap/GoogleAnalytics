# Magento 2 Google Tag Manager & Analytics Enchanced eCommerce

**Google Analytics** is the free Google service and almost webmasters rely on its role in evaluating the effectiveness of online marketing campaign specifically as the traffic to website and conversion rate into customers in exact period of time. 

Google Analytics extension is provided in order to help Magento stores use Google Analytics functionality more easily and conveniently. 

Google Tag Manager (GTM) is a user-friendly, powerful and essential integration for every Magento store. It simplifies the process of adding, editing and managing third-party JavaScript tags and other snippets of code on your Magento site. With GTM, you can quickly and easily add Facebook tags, AdWords Conversion Tracking, Re-marketing, Bing UET, SnapChat, DoubleClick code, Google Analytics and many more in a breeze without the need for a developer to make changes to your Magento code providing the data is available to Google Tag Manager.

---

## Installation without composer
* Download zip file of this extension
* Place all the files of the extension in your Magento 2 installation in the folder `app/code/Kashyap/GoogleAnalytics`
* Enable the extension: `php bin/magento --clear-static-content module:enable Kashyap_DeleteOrder`
* Upgrade db scheme: `php bin/magento setup:upgrade`
* Deply Static Content: `php bin/magento setup:static-content:deploy -f` Developer Mode
* Deply Static Content: `php bin/magento setup:static-content:deploy` Production Mode

---

[![Alt text](https://www.kashyapsoftware.com/pub/media/logo/stores/1/ks_logo.png "kashyapsoftware.com")](https://www.kashyapsoftware.com/)