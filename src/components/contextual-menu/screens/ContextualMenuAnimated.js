import React, { Component } from 'react';
import ContextualMenu from './ContextualMenu';
import ContextualMenuAdvancedIcon from './ContextualMenuAdvancedIcon';
import $ from 'jquery';

class ContextualMenuAnimated extends Component {

  componentDidMount() {
    $(document).ready(function() {
      $('#mvelo-advanced-options-button').click(function(e) {
        e.stopImmediatePropagation();
        $('.contextual-menu-container-slide').animate({marginLeft: "-230px"}, 200);
        return false;
      });
      $('#mvelo-normal-options-button').click(function(e) {
        e.stopImmediatePropagation();
        $('.contextual-menu-container-slide').animate({marginLeft: "0px"}, 200);
        return false;
      });
    });
  }

  render() {
    return (
      <div className="contextual-menu-container-slide-container">
        <div className="contextual-menu-container-slide">
          <ContextualMenu/>
          <ContextualMenuAdvancedIcon/>
        </div>
      </div>
    );
  }
}

export default ContextualMenuAnimated;
