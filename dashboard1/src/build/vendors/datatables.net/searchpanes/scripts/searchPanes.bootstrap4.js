(function(factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD
    define(['jquery', 'datatables.net-bs4', 'datatables.net-searchPanes'], function($) {
      return factory($, window, document);
    });
  } else if (typeof exports === 'object') {
    // CommonJS
    module.exports = function(root, $) {
      if (!root) {
        root = window;
      }
      if (!$ || !$.fn.dataTable) {
        $ = require('datatables.net-bs4')(root, $).$;
      }
      if (!$.fn.dataTable.searchPanes) {
        require('datatables.net-searchPanes')(root, $);
      }
      return factory($, root, root.document);
    };
  } else {
    // Browser
    factory(jQuery, window, document);
  }
}(function($, window, document) {
  'use strict';
  var DataTable = $.fn.dataTable;
  $.extend(true, DataTable.SearchPane.classes, {
    buttonGroup: 'btn-group',
    disabledButton: 'disabled',
    dull: '',
    narrow: 'col',
    pane: {
      container: 'table'
    },
    paneButton: 'btn btn-flat-primary btn-icon',
    pill: 'badge badge-pill badge-primary',
    search: 'form-control',
    searchCont: 'input-group',
    searchLabelCont: 'input-group-append',
    subRow1: 'dtsp-subRow1',
    subRow2: 'dtsp-subRow2',
    table: 'table table-sm table-borderless',
    topRow: 'dtsp-topRow row no-gutters'
  });
  $.extend(true, DataTable.SearchPanes.classes, {
    clearAll: 'dtsp-clearAll btn btn-flat-primary btn-wider',
    container: 'dtsp-searchPanes',
    panes: 'dtsp-panes dtsp-container',
    title: 'dtsp-title',
    titleRow: 'dtsp-titleRow'
  });
  return DataTable.searchPanes;
}));
