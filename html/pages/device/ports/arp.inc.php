<?php
$no_refresh = true;
?>
<table id="ports-arp" class="table table-condensed table-hover table-striped">
    <thead>
        <tr>
            <th data-column-id="interface">Port</th>
            <th data-column-id="mac_address">MAC address</th>
            <th data-column-id="ipv4_address">IPv4 address</th>
            <th data-column-id="remote_device" data-sortable="false">Remote device</th>
            <th data-column-id="remote_interface" data-sortable="false">Remote interface</th>
        </tr>
    </thead>
</table>

<script>

var grid = $("#ports-arp").bootgrid({
    ajax: true,
    post: function ()
    {
        return {
            id: "arp-search",
            device_id: "<?php echo $device['device_id']; ?>"
        };
    },
    url: "ajax_table.php"
});
</script>

