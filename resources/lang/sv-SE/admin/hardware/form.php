<?php

return [
    'bulk_delete'		=> 'Bekräfta massradering av tillgångar',
    'bulk_restore'      => 'Bekräfta massåterställning av tillgångar', 
  'bulk_delete_help'	=> 'Granska tillgångarna för massradering nedan. Efter radering kan dessa tillgångar återställas, men de kommer inte längre att vara associerade med de användare de för närvarande är tilldelade.',
  'bulk_restore_help'	=> 'Granska tillgångar för massåterställning nedan. Vid återställning kommer dessa tillgångar inte att associeras med några användare som de tidigare tilldelats.',
  'bulk_delete_warn'	=> 'Du är påväg att ta bort: asset_count tillgångar.',
  'bulk_restore_warn'	=> 'Du är påväg att återställa :asset_count tillgångar.',
    'bulk_update'		=> 'Massuppdatera tillgångar',
    'bulk_update_help'	=> 'I det här formuläret kan du uppdatera flera tillgångar på en gång. Fyll bara i de fält du behöver ändra. Alla fält som lämnas tomma kommer att förbli oförändrade.',
    'bulk_update_warn'	=> 'Du håller på att redigera egenskaperna för en tillgång.|Du håller på att redigera egenskaperna för :asset_count tillgångar.',
    'bulk_update_with_custom_field' => 'Notera att tillgångarna är :asset_model_count olika typer av modeller.',
    'bulk_update_model_prefix' => 'På modeller', 
    'bulk_update_custom_field_unique' => 'Detta är ett unikt fält och kan inte massredigeras.',
    'checkedout_to'		=> 'Utcheckad till',
    'checkout_date'		=> 'Utcheckningsdatum',
    'checkin_date'		=> 'Incheckningsdatum',
    'checkout_to'		=> 'Checka ut till',
    'cost'				=> 'Inköpskostnad',
    'create'			=> 'Skapa Tillgång',
    'date'				=> 'Köpdatum',
    'depreciation'	    => 'Avskrivning',
    'depreciates_on'	=> 'Depreciates On',
    'default_location'	=> 'Standard plats',
    'default_location_phone' => 'Telefonnummer för standardplats',
    'eol_date'			=> 'EOL Datum',
    'eol_rate'			=> 'EOL-hastighet',
    'expected_checkin'  => 'Förväntad incheckningsdatum',
    'expires'			=> 'Förfaller',
    'fully_depreciated'	=> 'Helt avskrivna',
    'help_checkout'		=> 'Om du vill tilldela denna tillgång omedelbart, välj "Redo att distribuera" från statuslistan ovan. ',
    'mac_address'		=> 'MAC-adress',
    'manufacturer'		=> 'Tillverkare',
    'model'				=> 'Modell',
    'months'			=> 'månader',
    'name'				=> 'Asset Name',
    'notes'				=> 'Anteckningar',
    'order'				=> 'Order Nummer',
    'qr'				=> 'QR-kod',
    'requestable'		=> 'Användare kan begära denna tillgång',
    'redirect_to_all'   => 'Tillbaka till alla :type',
    'redirect_to_type'   => 'Gå till :type',
    'redirect_to_checked_out_to'   => 'Gå till utcheckade till',
    'select_statustype'	=> 'Välj Statustyp',
    'serial'			=> 'Serienummer',
    'status'			=> 'Status',
    'tag'				=> 'Asset Tag',
    'update'			=> 'Asset Update',
    'warranty'			=> 'Garanti',
        'warranty_expires'		=> 'Garantin löper ut',
    'years'				=> 'år',
    'asset_location' => 'Uppdatera tillgångsplats',
    'asset_location_update_default_current' => 'Uppdatera standardplats och aktuell plats',
    'asset_location_update_default' => 'Uppdatera endast standardplats',
    'asset_location_update_actual' => 'Uppdatera endast faktisk plats',
    'asset_not_deployable' => 'Denna tillgångs status kan inte distribueras. Denna tillgång kan inte checkas ut.',
    'asset_not_deployable_checkin' => 'Denna tillgångsstatus kan inte distribueras. Användning av denna statusetikett kommer att checka in tillgången.',
    'asset_deployable' => 'Denna status är distribuerbar. Denna tillgång kan checkas ut.',
    'processing_spinner' => 'Bearbetar... (Detta kan ta lite tid på stora filer)',
    'optional_infos'  => 'Valfri information',
    'order_details'   => 'Beställningsrelaterad information',
    'calc_eol'    => 'Vid nollställning av EOL-datum, använd den automatiserade EOL-uträkningen baserat på inköpingsdatum och EOL-datum.',
];
