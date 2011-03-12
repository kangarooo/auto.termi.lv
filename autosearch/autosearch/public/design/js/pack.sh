#!/bin/sh
cat mootools-more.js UrlDetection.js mooml.js Locale.lv-LV.js Locale.ru-LV.js Locale.lg-LG.js Popup.js Filter.js CarList.js InlineSlider.js AdvancedList.js HashListener.js HistoryManager.js UrlManager.js g-analytic.js design.js > compact.js

yui-compressor compact.js -o m-yui.09-12.js
