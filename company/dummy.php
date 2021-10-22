<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    // require "php/preCommonHeader.php";
    // $hnewComp = "class='mm-active'";
    require "php/commonHeader.php";
?>
            <!--body-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                   
                    <div class="col-lg-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Students Demographics</h5>
                                <div class="table-responsive">
                                <!-- <table class="mb-0 table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email ID</th>
                                        <th>Branch</th>
                                        <th>Graduation Year</th>
                                        <th>No. of applied companies</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>larry@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>larry@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>larry@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>larry@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>larry@gmail.com</td>
                                        <td>Computer science</td>
                                        <td>2022</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table> -->
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Description</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alphabet puzzle</td>
                                            <td>2016/01/15</td>
                                            <td>Done</td>
                                            <td data-order="1000">€1.000,00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Layout for poster</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Image creation</td>
                                            <td>2016/01/23</td>
                                            <td></td>
                                            <td data-order="1500">€1.500,00</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Create font</td>
                                            <td>2016/02/26</td>
                                            <td>Done</td>
                                            <td data-order="1200">€1.200,00</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Sticker production</td>
                                            <td>2016/02/18</td>
                                            <td>Planned</td>
                                            <td data-order="2100">€2.100,00</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Glossy poster</td>
                                            <td>2016/03/17</td>
                                            <td>To Do</td>
                                            <td data-order="899">€899,00</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Beer label</td>
                                            <td>2016/05/28</td>
                                            <td>Confirmed</td>
                                            <td data-order="2499">€2.499,00</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Shop sign</td>
                                            <td>2016/04/19</td>
                                            <td>Offer</td>
                                            <td data-order="1099">€1.099,00</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>X-Mas decoration</td>
                                            <td>2016/10/31</td>
                                            <td>Confirmed</td>
                                            <td data-order="1750">€1.750,00</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Halloween invite</td>
                                            <td>2016/09/12</td>
                                            <td>Planned</td>
                                            <td data-order="400">€400,00</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Wedding announcement</td>
                                            <td>2016/07/09</td>
                                            <td>To Do</td>
                                            <td data-order="299">€299,00</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Member pasport</td>
                                            <td>2016/06/22</td>
                                            <td>Offer</td>
                                            <td data-order="149">€149,00</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Drink tickets</td>
                                            <td>2016/11/01</td>
                                            <td>Confirmed</td>
                                            <td data-order="199">€199,00</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Album cover</td>
                                            <td>2017/03/15</td>
                                            <td>To Do</td>
                                            <td data-order="4999">€4.999,00</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Shipment box</td>
                                            <td>2017/02/08</td>
                                            <td>Offer</td>
                                            <td data-order="1399">€1.399,00</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>16</td>
                                            <td>Wooden puzzle</td>
                                            <td>2017/01/11</td>
                                            <td>Done</td>
                                            <td data-order="1000">€1.000,00</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Fashion Layout</td>
                                            <td>2016/01/30</td>
                                            <td>Planned</td>
                                            <td data-order="1834">€1.834,00</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Toy creation</td>
                                            <td>2016/01/10</td>
                                            <td>To Do</td>
                                            <td data-order="1550">€1.550,00</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>Create stamps</td>
                                            <td>2016/02/26</td>
                                            <td>Done</td>
                                            <td data-order="1220">€1.220,00</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Sticker design</td>
                                            <td>2017/02/18</td>
                                            <td>Planned</td>
                                            <td data-order="2100">€2.100,00</td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>Poster rock concert</td>
                                            <td>2017/04/17</td>
                                            <td>To Do</td>
                                            <td data-order="899">€899,00</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Wine label</td>
                                            <td>2017/05/28</td>
                                            <td>Confirmed</td>
                                            <td data-order="2799">€2.799,00</td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Shopping bag</td>
                                            <td>2017/04/19</td>
                                            <td>Offer</td>
                                            <td data-order="1299">€1.299,00</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Decoration for Easter</td>
                                            <td>2017/10/31</td>
                                            <td>Confirmed</td>
                                            <td data-order="1650">€1.650,00</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Saint Nicolas colorbook</td>
                                            <td>2017/09/12</td>
                                            <td>Planned</td>
                                            <td data-order="510">€510,00</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>Wedding invites</td>
                                            <td>2017/07/09</td>
                                            <td>To Do</td>
                                            <td data-order="399">€399,00</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>Member pasport</td>
                                            <td>2017/06/22</td>
                                            <td>Offer</td>
                                            <td data-order="249">€249,00</td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>Drink tickets</td>
                                            <td>2017/11/01</td>
                                            <td>Confirmed</td>
                                            <td data-order="199">€199,00</td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>Blue-Ray cover</td>
                                            <td>2018/03/15</td>
                                            <td>To Do</td>
                                            <td data-order="1999">€1.999,00</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td>TV carton</td>
                                            <td>2019/02/08</td>
                                            <td>Offer</td>
                                            <td data-order="1369">€1.369,00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                
                    
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                          <p>All rights Reversed</p>
                       
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
<script>
	$(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title='DataTable Excel';
	// DataTable initialisation
	$('#example').DataTable(
		{
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
					{
            // extend: 'excelHtml5',
            // text: 'Excel',
            customize: function( xlsx ) {
							var sheet = xlsx.xl.worksheets['sheet1.xml'];
    					// Get reference to the worksheet and parse it to xml nodes
							// Has to be done this way to avoid creation of namespace atributes.
							var afSerializer = new XMLSerializer();
							var xmlString = afSerializer.serializeToString(sheet);
							var parser = new DOMParser();
							var xmlDoc = parser.parseFromString(xmlString,'text/xml');
							//Create header and add it to the worksheet
							var headerFooter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','headerFooter');
							sheet.getElementsByTagName('worksheet')[0].appendChild(headerFooter);
							var nodeHeaderFooter = sheet.getElementsByTagName("headerFooter");
							//Creation of the header
							var oddHeader = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','oddHeader');
							nodeHeaderFooter[0].appendChild(oddHeader);
							var nodeOddHeader = sheet.getElementsByTagName("oddHeader");
							//The header/footer column definitions
							// If unwanted, you can skip a column
							//&L = Left column
							//&F = Filename
							//&A = sheetname
							//&C = Center column
							//&D = Date
							//&T = Time
							//&R = Right Column
							//&P = Pagenumber
							//&N = Total number of pages
							var txtHeader = "&L"+"&F - &A"+"&R"+"&D - &T";
							var nodeHeader = xmlDoc.createTextNode(txtHeader);
							nodeOddHeader[0].appendChild(nodeHeader);
							//Creation of the footer
							var oddFooter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','oddFooter');
							nodeHeaderFooter[0].appendChild(oddFooter);
							var nodeOddFooter = sheet.getElementsByTagName("oddFooter");
							var txtFooter = "&R"+"Page &P of &N";
							var nodeFooter = xmlDoc.createTextNode(txtFooter);
							nodeOddFooter[0].appendChild(nodeFooter);
							//Add header and footer to the worksheet
							sheet.getElementsByTagName('worksheet')[0].appendChild(headerFooter);
						}
					}
			]
		}
	);
});
</script>
</body>

</html>