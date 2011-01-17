#!/bin/sh
cat mooml.js Locale.lv-LV.js Popup.js Filter.js CarList.js InlineSlider.js AdvancedList.js HashListener.js HistoryManager.js UrlManager.js design.js > compact.js

yui-compressor compact.js -o m-yui.js
