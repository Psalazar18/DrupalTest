/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
((Drupal)=>{Drupal.theme.checkbox=()=>`<input type="checkbox" class="form-checkbox"/>`;})(Drupal);;
((Drupal)=>{Drupal.theme.checkbox=()=>'<input type="checkbox" class="form-checkbox form-boolean form-boolean--type-checkbox"/>';})(Drupal);;
(function($,Drupal){Drupal.behaviors.tableSelect={attach(context,settings){once('table-select',$(context).find('th.select-all').closest('table')).forEach((table)=>Drupal.tableSelect.call(table));}};Drupal.tableSelect=function(){if($(this).find('td input[type="checkbox"]').length===0)return;const table=this;let checkboxes;let lastChecked;const $table=$(table);const strings={selectAll:Drupal.t('Select all rows in this table'),selectNone:Drupal.t('Deselect all rows in this table')};const updateSelectAll=function(state){$table.prev('table.sticky-header').addBack().find('th.select-all input[type="checkbox"]').each(function(){const $checkbox=$(this);const stateChanged=$checkbox.prop('checked')!==state;$checkbox.attr('title',state?strings.selectNone:strings.selectAll);if(stateChanged)$checkbox.prop('checked',state).trigger('change');});};$table.find('th.select-all').prepend($(Drupal.theme('checkbox')).attr('title',strings.selectAll)).on('click',(event)=>{if(event.target.matches('input[type="checkbox"]')){checkboxes.each(function(){const $checkbox=$(this);const stateChanged=$checkbox.prop('checked')!==event.target.checked;if(stateChanged)$checkbox.prop('checked',event.target.checked).trigger('change');$checkbox.closest('tr').toggleClass('selected',this.checked);});updateSelectAll(event.target.checked);}});checkboxes=$table.find('td input[type="checkbox"]:enabled').on('click',function(e){$(this).closest('tr').toggleClass('selected',this.checked);if(e.shiftKey&&lastChecked&&lastChecked!==e.target)Drupal.tableSelectRange($(e.target).closest('tr')[0],$(lastChecked).closest('tr')[0],e.target.checked);updateSelectAll(checkboxes.length===checkboxes.filter(':checked').length);lastChecked=e.target;});updateSelectAll(checkboxes.length===checkboxes.filter(':checked').length);};Drupal.tableSelectRange=function(from,to,state){const mode=from.rowIndex>to.rowIndex?'previousSibling':'nextSibling';for(let i=from[mode];i;i=i[mode]){const $i=$(i);if(i.nodeType!==1)continue;$i.toggleClass('selected',state);$i.find('input[type="checkbox"]').prop('checked',state);if(to.nodeType){if(i===to)break;}else{if($.filter(to,[i]).r.length)break;}}};})(jQuery,Drupal);;
(($,Drupal,{tabbable})=>{Drupal.ClaroBulkActions=class{constructor(bulkActions){this.bulkActions=bulkActions;this.form=this.bulkActions.closest('form');this.form.querySelectorAll('tr').forEach((element)=>{element.classList.add('views-form__bulk-operations-row');});this.checkboxes=this.form.querySelectorAll('[class$="bulk-form"]:not(.select-all) input[type="checkbox"]');this.selectAll=this.form.querySelectorAll('.select-all > [type="checkbox"]');this.$tabbable=$(tabbable(this.form));this.bulkActionsSticky=false;this.scrollingTimeout='';this.ignoreScrollEvent=false;$(this.checkboxes).on('change',(event)=>this.rowCheckboxHandler(event));$(this.selectAll).on('change',(event)=>this.selectAllHandler(event));this.$tabbable.on('focus',(event)=>this.focusHandler(event));this.$tabbable.on('blur',(event)=>this.blurHandler(event));this.spacerCss=document.createElement('style');document.body.appendChild(this.spacerCss);const scrollResizeHandler=Drupal.debounce(()=>{this.scrollResizeHandler();},10);$(window).on('scroll',()=>scrollResizeHandler());$(window).on('resize',()=>scrollResizeHandler());$(window).on('load',()=>this.rowCheckboxHandler({}));}blurHandler(event){if(!event.hasOwnProperty('isTrigger')){const row=event.target.closest('tr');const nextSibling=row?row.nextElementSibling:null;if(nextSibling&&nextSibling.getAttribute('data-drupal-table-row-spacer'))nextSibling.parentNode.removeChild(nextSibling);}}focusHandler(event){if(event.currentTarget.closest('[data-drupal-views-bulk-actions]'))return;const stickyRect=this.bulkActions.getBoundingClientRect();const stickyStart=stickyRect.y;const elementRect=event.target.getBoundingClientRect();const elementStart=elementRect.y;const elementEnd=elementStart+elementRect.height;if(elementEnd>stickyStart)window.scrollBy(0,elementEnd-stickyStart);this.underStickyHandler();}scrollResizeHandler(){this.spacerCss.innerHTML='[data-drupal-table-row-spacer] { display: none; }';if(!this.ignoreScrollEvent){clearTimeout(this.scrollingTimeout);this.scrollingTimeout=setTimeout(()=>{this.spacerCss.innerHTML='';this.underStickyHandler();},500);}}underStickyHandler(){document.querySelectorAll('[data-drupal-table-row-spacer]').forEach((element)=>{element.parentNode.removeChild(element);});if(this.bulkActionsSticky){let pastStickyHeader=false;const stickyRect=this.bulkActions.getBoundingClientRect();const stickyStart=stickyRect.y;const stickyEnd=stickyStart+stickyRect.height;this.form.querySelectorAll('tbody tr').forEach((row)=>{if(!pastStickyHeader){const rowRect=row.getBoundingClientRect();const rowStart=rowRect.y;const rowEnd=rowStart+rowRect.height;if(rowStart>stickyEnd)pastStickyHeader=true;else{if(rowEnd>stickyStart){const cellTopPadding=Array.from(row.querySelectorAll('td.views-field')).map((element)=>document.defaultView.getComputedStyle(element,'').getPropertyValue('padding-top').replace('px',''));const minimumTopPadding=Math.min.apply(null,cellTopPadding);if(rowStart+minimumTopPadding>=stickyStart){const oldScrollTop=window.pageYOffset||document.documentElement.scrollTop;const scrollLeft=window.pageXOffset||document.documentElement.scrollLeft;const rowContainsActiveElement=row.contains(document.activeElement);if(rowContainsActiveElement)this.ignoreScrollEvent=true;const spacer=document.createElement('div');spacer.style.height=`${stickyRect.height}px`;spacer.setAttribute('data-drupal-table-row-spacer',true);row.parentNode.insertBefore(spacer,row);const newScrollTop=window.pageYOffset||document.documentElement.scrollTop;const windowBottom=window.innerHeight||document.documentElement.clientHeight;if(rowContainsActiveElement&&oldScrollTop!==newScrollTop&&rowStart<windowBottom)window.scrollTo(scrollLeft,oldScrollTop);this.ignoreScrollEvent=false;}}}}});}}selectAllHandler(event){if(!event.hasOwnProperty('isTrigger')){const itemsCheckedCount=event.target.checked?this.checkboxes.length:0;this.updateStatus(itemsCheckedCount);this.underStickyHandler();}}rowCheckboxHandler(event){if(!event.hasOwnProperty('isTrigger'))this.updateStatus(Array.prototype.slice.call(this.checkboxes).filter((checkbox)=>checkbox.checked).length);}updateStatus(count){let statusMessage='';let operationsAvailableMessage='';if(count>0){if(!this.bulkActionsSticky){operationsAvailableMessage=Drupal.t('Bulk actions are now available. These actions will be applied to all selected items. This can be accessed via the "Skip to bulk actions" link that appears after every enabled checkbox. ');this.bulkActionsSticky=true;setTimeout(()=>this.underStickyHandler(),350);const stickyRect=this.bulkActions.getBoundingClientRect();const bypassAnimation=stickyRect.top+stickyRect.height<window.scrollY+window.innerHeight;const classAction=bypassAnimation?'add':'remove';this.bulkActions.classList[classAction]('views-form__header--bypass-animation');}statusMessage=Drupal.formatPlural(count,'1 item selected','@count items selected');}else{this.bulkActionsSticky=false;statusMessage=Drupal.t('No items selected');setTimeout(()=>this.underStickyHandler(),350);}this.bulkActions.setAttribute('data-drupal-sticky-vbo',this.bulkActionsSticky);this.bulkActions.querySelector('[data-drupal-views-bulk-actions-status]').textContent=statusMessage;Drupal.announce(operationsAvailableMessage+statusMessage);this.underStickyHandler();}};Drupal.behaviors.claroTableSelect={attach(context){const bulkActions=once('ClaroBulkActions','[data-drupal-views-bulk-actions]',context);bulkActions.map((bulkActionForm)=>new Drupal.ClaroBulkActions(bulkActionForm));}};})(jQuery,Drupal,window.tabbable,once);;
