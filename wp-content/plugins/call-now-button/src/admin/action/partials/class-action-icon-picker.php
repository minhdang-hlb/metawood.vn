<?php
namespace cnb\admin\action;

use cnb\admin\button\CnbButton;

// don't load directly
defined( 'ABSPATH' ) || die( '-1' );

class ActionIconPicker {
    /**
     * @param $action CnbAction
     * @param $button CnbButton
     *
     * @return void
     */
    public function render($action, $button) {
        $upgrade_link =
            add_query_arg( array(
                'page'   => 'call-now-button-domains',
                'action' => 'upgrade',
                'id'     => $button->domain->id
            ),
                admin_url( 'admin.php' ) );

        ?>
        <tr class="cnb_hide_on_modal">
            <th scope="row"><label for="actions-<?php echo esc_attr( $action->id ) ?>-iconText">Button icon/image </label></th>
            <td data-icon-text-target="cnb_action_icon_text" data-icon-type-target="cnb_action_icon_type">
                <?php if ( $button->domain->type !== 'STARTER' ) { ?>
                    <div class="icon-text-options" id="icon-text-ANCHOR">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="anchor">anchor</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="close_down">close_down</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="anchor_up">anchor_up</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-EMAIL">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="email">email</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="mail2">mail2</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="mail3">mail3</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-HOURS">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon family-material" data-icon-type="FONT_MATERIAL"
                               data-icon-text="access_time">access_time</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon family-material" data-icon-type="FONT_MATERIAL"
                               data-icon-text="access_time_filled">access_time_filled</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-LINK">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="link">link</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="link2">link2</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="link3">link3</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="link4">link4</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="link5">link5</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="calendar">calendar</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-MAP">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="directions">directions</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="directions2">directions2</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="directions3">directions3</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="directions4">directions4</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="directions5">directions5</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="directions6">directions6</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-PHONE">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="call">call</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="call2">call2</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="call3">call3</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="call4">call4</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-SMS">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="chat">chat</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="sms">sms</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-WHATSAPP">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="whatsapp">whatsapp</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-FACEBOOK">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="facebook_messenger">facebook_messenger</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-TELEGRAM">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="telegram">telegram</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-SIGNAL">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="signal">signal</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-IFRAME">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="open_modal">open_modal</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="calendar">calendar</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="communicate">communicate</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="conversation">conversation</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="more_info">more_info</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="call_back">call_back</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="donate">donate</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="payment">payment</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-TALLY">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="call3">call3</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="email">email</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="chat">chat</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="communicate">communicate</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="open_modal">open_modal</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="donate">donate</i>
                        </div>
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="payment">payment</i>
                        </div>
                    </div>
                    <div class="icon-text-options" id="icon-text-INTERCOM">
                        <div class="cnb-button-icon">
                            <i class="cnb-font-icon" data-icon-type="FONT" data-icon-text="intercom">intercom</i>
                        </div>
                    </div>
                <?php } ?>

                <?php if ( $button->domain->type === 'STARTER' ) { ?>
                    <p class="description">
                        Icon selection and custom images are <span class="cnb-pro-badge">Pro</span> features.
                        <a href="<?php echo esc_url( $upgrade_link ) ?>">Upgrade</a>.
                    </p>
                <?php } else {
                    $this->render_image_selector($action, $button);
                } ?>

                <a
                    href="#"
                    onclick="return cnb_show_icon_text_advanced(this)"
                    data-icon-text="cnb_action_icon_text"
                    data-icon-type="cnb_action_icon_type"
                    data-description="cnb_action_icon_text_description"
                    class="cnb_advanced_view">Use a custom icon</a>
                <input
                    type="hidden"
                    name="actions[<?php echo esc_attr( $action->id ) ?>][iconText]"
                    value="<?php if ( isset( $action->iconText ) ) {
                        echo esc_attr( $action->iconText );
                    } ?>"
                    id="cnb_action_icon_text"/>
                <input
                    type="hidden"
                    readonly="readonly"
                    name="actions[<?php echo esc_attr( $action->id ) ?>][iconType]"
                    value="<?php if ( isset( $action->iconType ) ) {
                        echo esc_attr( $action->iconType );
                    } ?>"
                    id="cnb_action_icon_type"/>
                <p class="description" id="cnb_action_icon_text_description" style="display: none">
                    You can enter a custom Material Design font code here. Search the full library at <a
                        href="https://fonts.google.com/icons" target="_blank">Google Fonts</a>.<br/>
                    The Call Now Button uses the <code>filled</code> version of icons.</p>
            </td>
        </tr>
        <?php
    }

    private function render_image_selector( $action, $button ) { ?>
        <div
                class="cnb-button-icon cnb-button-image cnb_icon_active cnb_selected_action_background_image"
                style="background-image:<?php echo esc_attr( $action->iconBackgroundImage ) ?>"
        ></div>

        <input
                type="hidden"
                name="actions[<?php echo esc_attr( $action->id ) ?>][iconBackgroundImage]"
                value="<?php echo esc_attr( $action->iconBackgroundImage ) ?>"
                class="cnb_action_icon_background_image"
        />

        <input
                type='button'
                class="cnb_select_image button-secondary"
                value="<?php esc_attr_e( 'Select image' ); ?>"
                <?php if ( $button->domain->type !== 'PRO' ) { ?>disabled="disabled"
                title="Upgrade to PRO to enable custom images"<?php } ?>
        />
            <?php
    }

    /**
     * @param $action CnbAction
     * @param $button CnbButton
     *
     * @return void
     */
    public function render_icon_color_chooser($action, $button) {
        // SINGLE does not configure the color via the Action, but via the Button
        // (On the Presentation tab)
        if ( $button && $button->type === 'SINGLE' ) {
            return;
        } ?>

        <tr>
            <th scope="row">
                <label for="actions[<?php echo esc_attr( $action->id ) ?>][backgroundColor]">
                    Button color
                </label>
            </th>
            <td>
                <input name="actions[<?php echo esc_attr( $action->id ) ?>][backgroundColor]"
                       id="actions[<?php echo esc_attr( $action->id ) ?>][backgroundColor]" type="text"
                       value="<?php echo esc_attr( $action->backgroundColor ) ?>"
                       class="cnb-color-field" data-default-color="#009900"/>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="actions[<?php echo esc_attr( $action->id ) ?>][iconColor]">
                    Icon color
                </label>
            </th>
            <td>
                <input name="actions[<?php echo esc_attr( $action->id ) ?>][iconColor]"
                       id="actions[<?php echo esc_attr( $action->id ) ?>][iconColor]" type="text"
                       value="<?php echo esc_attr( $action->iconColor ) ?>"
                       class="cnb-color-field" data-default-color="#FFFFFF"/>
            </td>
        </tr>
        <?php

        // Actions on a Single or Multi button are not allowed to hide their Icon.
        // Only the Actions on a Full (Buttonbar) are allowed to hide their Icon.
        if ( $button && $button->type === 'MULTI' ) { ?>
            <input name="actions[<?php echo esc_attr( $action->id ) ?>][iconEnabled]" type="hidden" value="1"/>
            <?php
            return;
        } ?>

        <tr>
            <th scope="row"></th>
            <td>
                <input type="hidden" name="actions[<?php echo esc_attr( $action->id ) ?>][iconEnabled]"
                       id="actions[<?php echo esc_attr( $action->id ) ?>][iconEnabled]" value="0"/>
                <input id="cnb-action-icon-enabled" class="cnb_toggle_checkbox" type="checkbox"
                       name="actions[<?php echo esc_attr( $action->id ) ?>][iconEnabled]"
                       id="actions[<?php echo esc_attr( $action->id ) ?>][iconEnabled]"
                       value="true" <?php checked( true, $action->iconEnabled ); ?>>
                <label for="cnb-action-icon-enabled" class="cnb_toggle_label">Toggle</label>
                <span data-cnb_toggle_state_label="cnb-action-icon-enabled"
                      class="cnb_toggle_state cnb_toggle_false">Hide icon</span>
                <span data-cnb_toggle_state_label="cnb-action-icon-enabled"
                      class="cnb_toggle_state cnb_toggle_true">Show icon</span>
            </td>
        </tr>
        <?php
    }
}
