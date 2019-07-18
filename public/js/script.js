"use strict";

AddMarginFilterItemsTree();


function AddMarginFilterItemsTree() {
    const filterItemsTree = document.querySelectorAll('.filter_item__tree');
    const baseMargin = 20;
    for (let i = 0; i < filterItemsTree.length; i++) {
        filterItemsTree[i].style.marginLeft = baseMargin * i + 'px';
        
    }
}