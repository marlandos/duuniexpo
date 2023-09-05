// Hook in LASKUTUSTIEDOT
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields234' );

// Our hooked in function – $fields is passed via the filter!
function custom_override_checkout_fields234( $fields ) {

	
	$fields['shipping']['shipping_first_name'] = array(
        'label'     => __('Y-Tunnus', 'woocommerce'),
    'placeholder'   => _x('Y-Tunnus', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );
	
    $fields['shipping']['shipping_last_name'] = array(
    'label'     => __('Verkkolaskuoperaattori', 'woocommerce'),
    'placeholder'   => _x('Verkkolaskuoperaattori', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );
	
    $fields['shipping']['shipping_viite'] = array(
    'label'     => __('Viite', 'woocommerce'),
    'placeholder'   => _x('Viite', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );
	
    $fields['shipping']['shipping_ovt'] = array(
    'label'     => __('OVT-tunnus', 'woocommerce'),
    'placeholder'   => _x('OVT-tunnus', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );	
    
	$fields['shipping']['shipping_valittaja'] = array(
    'label'     => __('Välittäjätunnus', 'woocommerce'),
    'placeholder'   => _x('Välittäjätunnus', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );
	
    $fields['shipping']['shipping_phone'] = array(
    'label'     => __('Laskutuksen lisätiedot', 'woocommerce'),
    'placeholder'   => _x('Laskutuksen lisätiedot', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );

     return $fields;
}







/**
 * Add checkbox field to the checkout
 **/
add_action('woocommerce_after_order_notes', 'my_custom_checkout_field');
 
function my_custom_checkout_field( $checkout ) {
	echo '</br>';
	
	echo '<div id="my_custom_checkout_field">';

    woocommerce_form_field( 'lyhyt_kuvaus', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Yrityksen lyhyt kuvaus nettisivuille, logon alle. Max. 500 merkkiä.'),
        'placeholder'   => __('Lyhyt kuvaus'),
        ), $checkout->get_value( 'lyhyt_kuvaus' ));

    echo '</div>';
	
	echo '<div id="my_custom_checkout_field">';
	
    woocommerce_form_field( 'my_field_name', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('KOKO Lahden kalustepaketin nimikylttiin tuleva teksti. Ei sisälly perusratkaisuun!'),
        'placeholder'   => __('Sisältyy vain KOKO Lahden kalustepakettiin'),
        ), $checkout->get_value( 'my_field_name' ));
	echo '<p>' . __('Jos valitsit messupaikan valmiilla kalustepaketilla, niin lähetä yrityksesi logo vektorimuodossa osoitteeseen tilaukset at duuniexpo.eu') . '</p>';
    echo '</div>';
    echo '</br>';
    echo '<div id="my-new-field"><h5>'.__('Olemme kiinnostuneita: ').'</h5>';
 
    woocommerce_form_field( 'my_checkbox', array(
		'id'          => '_my_checkbox',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Harjoittelijoista'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox' ));
 
    echo '</div>';
	
	echo '<div id="my-new-field">';	
    woocommerce_form_field( 'my_checkbox2', array(
		'id'          => '_my_checkbox2',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Opinnäytetyön tekijöistä'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox2' ));
 
    echo '</div>';
	
	echo '<div id="my-new-field">';	
	woocommerce_form_field( 'my_checkbox3', array(
		'id'          => '_my_checkbox3',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Kesätyöntekijöistä'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox3' ));
 
    echo '</div>';
	
	echo '<div id="my-new-field">';	
	woocommerce_form_field( 'my_checkbox4', array(
		'id'          => '_my_checkbox4',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Vakituisista työntekijöistä'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox4' ));
 
    echo '</div>';
	
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox5', array(
		'id'          => '_my_checkbox5',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Kansainvälisistä opiskelijoista'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox5' ));
 
    echo '</div>';
    echo '</br>';	
	echo '<div id="my-new-field"><h5>'.__('Olemme erityisesti kiinnostuneita seuraavien alojen opiskelijoista: ').'</h5>';
	
	
	woocommerce_form_field( 'my_checkbox6', array(
		'id'          => '_my_checkbox6',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Tieto- ja viestintätekniikka'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox6' ));

	echo '</div>';
	
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox7', array(
		'id'          => '_my_checkbox7',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Tietojenkäsittely'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox7' ));

	echo '</div>';
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox8', array(
		'id'          => '_my_checkbox8',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Konetekniikka'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox8' ));

	echo '</div>';
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox9', array(
		'id'          => '_my_checkbox9',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Energia- ja ympäristötekniikka'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox9' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox10', array(
		'id'          => '_my_checkbox10',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Puutekniikka'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox10' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox11', array(
		'id'          => '_my_checkbox11',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Rakennustekniikka'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox11' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox12', array(
		'id'          => '_my_checkbox12',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Liiketalous'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox12' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox13', array(
		'id'          => '_my_checkbox13',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Sosiaali- ja terveysala'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox13' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox14', array(
		'id'          => '_my_checkbox14',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Yhdyskuntatekniikka'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox14' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox15', array(
		'id'          => '_my_checkbox15',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Matkailu ja tapahtumaliiketoiminta'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox15' ));

	echo '</div>';
	
		
	echo '<div id="my-new-field">';
	woocommerce_form_field( 'my_checkbox16', array(
		'id'          => '_my_checkbox16',
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __('Muotoilu ja visuaalinen viestintä'),
        'required'  => false,
        ), $checkout->get_value( 'my_checkbox16' ));

	echo '</div>';
	echo '</br>';
		
	echo '</p>'.__('Kysely vie aikaa vain 1 - 2 min. Jos et ehdi vastata siihen, niin voit myöhemminkin vastata sivuiltamme ').'<a href="https://duuniexpo.eu/kyselylomake-yrityksille/">' . __('kyselyyn.') . '</a></p>';

}




/**
 * Process the checkout
 
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');
 
function my_custom_checkout_field_process() {
    global $woocommerce;
 
    // Check if set, if its not set add an error.
    if (!$_POST['my_checkbox'])
         $woocommerce->add_error( __('Please agree to my checkbox.') );
}**/
 



/**
 * Update the order meta with field value
 **/
add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');
 
function my_custom_checkout_field_update_order_meta( $order_id ) {

if ( ! empty( $_POST['lyhyt_kuvaus'] ) ) {
	update_post_meta( $order_id, 'Lyhyt Kuvaus', sanitize_text_field( $_POST['lyhyt_kuvaus'] ) );
}


if ( ! empty( $_POST['my_field_name'] ) ) {
	update_post_meta( $order_id, 'My Field', sanitize_text_field( $_POST['my_field_name'] ) );
}
	

    if ($_POST['my_checkbox']) update_post_meta( $order_id, 'My Checkbox', esc_attr($_POST['my_checkbox']));
    if ($_POST['my_checkbox2']) update_post_meta( $order_id, 'My Checkbox2', esc_attr($_POST['my_checkbox2']));
    if ($_POST['my_checkbox3']) update_post_meta( $order_id, 'My Checkbox3', esc_attr($_POST['my_checkbox3']));
    if ($_POST['my_checkbox4']) update_post_meta( $order_id, 'My Checkbox4', esc_attr($_POST['my_checkbox4']));
    if ($_POST['my_checkbox5']) update_post_meta( $order_id, 'My Checkbox5', esc_attr($_POST['my_checkbox5']));
    if ($_POST['my_checkbox6']) update_post_meta( $order_id, 'My Checkbox6', esc_attr($_POST['my_checkbox6']));
    if ($_POST['my_checkbox7']) update_post_meta( $order_id, 'My Checkbox7', esc_attr($_POST['my_checkbox7']));
    if ($_POST['my_checkbox8']) update_post_meta( $order_id, 'My Checkbox8', esc_attr($_POST['my_checkbox8']));
    if ($_POST['my_checkbox9']) update_post_meta( $order_id, 'My Checkbox9', esc_attr($_POST['my_checkbox9']));
    if ($_POST['my_checkbox10']) update_post_meta( $order_id, 'My Checkbox10', esc_attr($_POST['my_checkbox10']));
    if ($_POST['my_checkbox11']) update_post_meta( $order_id, 'My Checkbox11', esc_attr($_POST['my_checkbox11']));
    if ($_POST['my_checkbox12']) update_post_meta( $order_id, 'My Checkbox12', esc_attr($_POST['my_checkbox12']));
    if ($_POST['my_checkbox13']) update_post_meta( $order_id, 'My Checkbox13', esc_attr($_POST['my_checkbox13']));
    if ($_POST['my_checkbox14']) update_post_meta( $order_id, 'My Checkbox14', esc_attr($_POST['my_checkbox14']));
    if ($_POST['my_checkbox15']) update_post_meta( $order_id, 'My Checkbox15', esc_attr($_POST['my_checkbox15']));
    if ($_POST['my_checkbox16']) update_post_meta( $order_id, 'My Checkbox16', esc_attr($_POST['my_checkbox16']));

	
}

/**
 * Display field value on the order edit page
 */
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Y-Tunnus').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_first_name', true ) . '</p>';
    echo '<p><strong>'.__('Verkkolaskuoperaattori').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_last_name', true ) . '</p>';
    echo '<p><strong>'.__('viite').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_viite', true ) . '</p>';
    echo '<p><strong>'.__('OVT-tunnus').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_ovt', true ) . '</p>';
    echo '<p><strong>'.__('Välittäjätunnus').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_valittaja', true ) . '</p>';
    echo '<p><strong>'.__('Laskutuksen lisätiedot').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_phone', true ) . '</p>';	
	
	

echo '<p><strong>'.__('Lyhyt yritys Kuvaus').':</strong> ' . get_post_meta( $order->id, 'Lyhyt Kuvaus', true ) . '</p>';
	
echo '<p><strong>'.__('Teksti nimikylttiin').':</strong> ' . get_post_meta( $order->id, 'My Field', true ) . '</p>';
	
	$checkbox =  get_post_meta( $order->id, 'My Checkbox', true );
	$checkbox2 = get_post_meta( $order->id, 'My Checkbox2', true );
	$checkbox3 = get_post_meta( $order->id, 'My Checkbox3', true );
	$checkbox4 = get_post_meta( $order->id, 'My Checkbox4', true );
	$checkbox5 = get_post_meta( $order->id, 'My Checkbox5', true );
	
	$checkbox6 = get_post_meta( $order->id, 'My Checkbox6', true );
	$checkbox7 = get_post_meta( $order->id, 'My Checkbox7', true );
	$checkbox8 = get_post_meta( $order->id, 'My Checkbox8', true );
	$checkbox9 = get_post_meta( $order->id, 'My Checkbox9', true );
	$checkbox10 = get_post_meta( $order->id, 'My Checkbox10', true );
	$checkbox11 = get_post_meta( $order->id, 'My Checkbox11', true );
	$checkbox12 = get_post_meta( $order->id, 'My Checkbox12', true );
	$checkbox13 = get_post_meta( $order->id, 'My Checkbox13', true );
	$checkbox14 = get_post_meta( $order->id, 'My Checkbox14', true );
	$checkbox15 = get_post_meta( $order->id, 'My Checkbox15', true );
	$checkbox16 = get_post_meta( $order->id, 'My Checkbox16', true );

	


	
if ( $checkbox == 1 )  {
echo '<p><strong>'.__('Harjoittelijoista').',</strong> ' . get_post_meta( $order->id, 'My Checkbox', true ) . '</p>';}
if ( $checkbox2 == 1 )  {
echo '<p><strong>'.__('opinnäytetyön tekijöistä').',</strong> ' . get_post_meta( $order->id, 'My Checkbox2', true ) . '</p>';}
if ( $checkbox3 == 1 )  {
echo '<p><strong>'.__('kesätyöntekijöistä').',</strong> ' . get_post_meta( $order->id, 'My Checkbox3', true ) . '</p>';}
if ( $checkbox4 == 1 )  {
echo '<p><strong>'.__('vakituisista työntekijöistä').',</strong> ' . get_post_meta( $order->id, 'My Checkbox4', true ) . '</p>';}
if ( $checkbox5 == 1 )  {
echo '<p><strong>'.__('kansainvälisistä opiskelijoista').',</strong> ' . get_post_meta( $order->id, 'My Checkbox5', true ) . '</p>';}
if ( $checkbox6 == 1 )  {
echo '<p><strong>'.__('Tieto- ja viestintätekniikka').',</strong> ' . get_post_meta( $order->id, 'My Checkbox6', true ) . '</p>';}
if ( $checkbox7 == 1 )  {
echo '<p><strong>'.__('Tietojenkäsittely').':</strong> ' . get_post_meta( $order->id, 'My Checkbox7', true ) . '</p>';}
if ( $checkbox8 == 1 )  {
echo '<p><strong>'.__('konetekniikka').':</strong> ' . get_post_meta( $order->id, 'My Checkbox8', true ) . '</p>';}
if ( $checkbox9 == 1 )  {
echo '<p><strong>'.__('energia- ja ympäristötekniikka').',</strong> ' . get_post_meta( $order->id, 'My Checkbox9', true ) . '</p>';}
if ( $checkbox10 == 1 )  {
echo '<p><strong>'.__('puutekniikka').':</strong> ' . get_post_meta( $order->id, 'My Checkbox10', true ) . '</p>';}
if ( $checkbox11 == 1 )  {
echo '<p><strong>'.__('rakennustekniikka').',</strong> ' . get_post_meta( $order->id, 'My Checkbox11', true ) . '</p>';}
if ( $checkbox12 == 1 )  {
echo '<p><strong>'.__('liiketalous').',</strong> ' . get_post_meta( $order->id, 'My Checkbox12', true ) . '</p>';}
if ( $checkbox13 == 1 )  {
echo '<p><strong>'.__('sosiaali- ja terveysala').',</strong> ' . get_post_meta( $order->id, 'My Checkbox13', true ) . '</p>';}
if ( $checkbox14 == 1 )  {
echo '<p><strong>'.__('Yhdyskuntatekniikka').',</strong> ' . get_post_meta( $order->id, 'My Checkbox14', true ) . '</p>';}
if ( $checkbox15 == 1 )  {
echo '<p><strong>'.__('matkailu ja tapahtumaliiketoiminta').',</strong> ' . get_post_meta( $order->id, 'My Checkbox15', true ) . '</p>';}
if ( $checkbox16 == 1 )  {
echo '<p><strong>'.__('muotoilu ja visuaalinen viestintä').'.</strong> ' . get_post_meta( $order->id, 'My Checkbox16', true ) . '</p>';}


}

?>
