$(function () {
    $('#example').dataTable({
      paging: false,
      fixedHeader: {
        header: true
      },
          dom: 'Bfrtip',
          buttons: [
        {
          extend: 'excel',
          text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
        },
        {
          extend: 'pdf',
          text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
        },
        
              'copy',
              'pdf',
              'colvis'
          ],
      
    });
  });