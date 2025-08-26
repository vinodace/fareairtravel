<form action="search-cruise.php" method="post" onsubmit="return validateForm()">
  <div class="row">
    <div class="col-sm-4 col-md-3 col-lg-2">
      <div class="form-group">
        <label class="cruise-label">Desination</label>
        <select class="cruise-field" name="destination" id="destination">
          <option value="0">Select Destination</option>
          <option value="Alaska">Alaska</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Canada / New England">Canada / New England</option>
          <option value="Caribbean">Caribbean</option>
          <option value="Europe">Europe</option>
          <option value="Hawaii">Hawaii</option>
          <option value="2871">Mediterranean</option>
          <option value="2828">Mexico</option>
          <option value="2845">Panama Canal</option>
          <optgroup label="-----">
            <option value="Africa">Africa</option>
            <option value="Alaska">Alaska</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Arabian Gulf">Arabian Gulf</option>
            <option value="Arctic">Arctic</option>
            <option value="Asia">Asia</option>
            <option value="Australasia">Australasia</option>
            <option value="Australia">Australia</option>
            <option value="Australia / New Zealand">Australia / New Zealand</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Baja Mexico">Baja Mexico</option>
            <option value="Baltic Sea (Europe)">Baltic Sea (Europe)</option>
            <option value="Bermuda">Bermuda</option>
            <option value="British Isles">British Isles</option>
            <option value="Canada">Canada</option>
            <option value="Canada / New England">Canada / New England</option>
            <option value="Canary Islands">Canary Islands</option>
            <option value="Caribbean">Caribbean</option>
            <option value="Central America">Central America</option>
            <option value="Central Mediterranean">Central Mediterranean</option>
            <option value="Eastern Caribbean">Eastern Caribbean</option>
            <option value="Eastern Europe">Eastern Europe</option>
            <option value="Eastern Mediterranean">Eastern Mediterranean</option>
            <option value="Europe">Europe</option>
            <option value="Galapagos">Galapagos</option>
            <option value="Greenland">Greenland</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="2859">Indian Ocean</option>
            <option value="Japan">Japan</option>
            <option value="Kimberley">Kimberley</option>
            <option value="Mediterranean">Mediterranean</option>
            <option value="Mexican Riviera">Mexican Riviera</option>
            <option value="Mexico">Mexico</option>
            <option value="Middle East">Middle East</option>
            <option value="Mississippi River (USA)">Mississippi River (USA)</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="North America">North America</option>
            <option value="Northern Europe">Northern Europe</option>
            <option value="Norway">Norway</option>
            <option value="Oceania">Oceania</option>
            <option value="Orient Far East">Orient Far East</option>
            <option value="Pacific">Pacific</option>
            <option value="Pacific Coastal">Pacific Coastal</option>
            <option value="Panama Canal">Panama Canal</option>
            <option value="Red Sea">Red Sea</option>
            <option value="Repositioning">Repositioning</option>
            <option value="Saudi Arabia and Red Sea">Saudi Arabia and Red Sea</option>
            <option value="South America">South America</option>
            <option value="South Pacific">South Pacific</option>
            <option value="Southeast Asia">Southeast Asia</option>
            <option value="Southern Caribbean">Southern Caribbean </option>
            <option value="Southern Europe">Southern Europe</option>
            <option value="Tasmania">Tasmania</option>
            <option value="The Great Lakes">The Great Lakes</option>
            <option value="Transatlantic">Transatlantic</option>
            <option value="Transpacific">Transpacific</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Western Caribbean">Western Caribbean</option>
            <option value="Western Europe">Western Europe</option>
            <option value="Western Mediterranean">Western Mediterranean</option>
            <option value="World Cruise">World Cruise</option>
          </optgroup>
        </select>
      </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2">
      <div class="form-group">
        <label class="cruise-label">Departure Port</label>
        <select class="cruise-field" name="departure_port" id="departure_port">
          <option value="0" selected="selected">Select Departure Port</option>
          <option value="Barcelona">Barcelona</option>
          <option value="Edinburgh">Edinburgh</option>
          <option value="Fort Lauderdale">Fort Lauderdale</option>
          <option value="Galveston">Galveston</option>
          <option value="Los Angeles">Los Angeles</option>
          <option value="Miami">Miami</option>
          <option value="New Orleans">New Orleans</option>
          <option value="New York City">New York City</option>
          <option value="Port Canaveral">Port Canaveral </option>
          <option value="Rome">Rome</option>
          <option value="San Juan">San Juan</option>
          <option value="Seattle/Tacoma">Seattle/Tacoma</option>
          <option value="Tampa/St.Petersburg">Tampa/St.Petersburg</option>
          <option value="Vancouver">Vancouver</option>
          <option value="Venice">Venice</option>
          <optgroup label="-----">
            <option value="Abu Dhabi">Abu Dhabi</option>
            <option value="Accra">Accra</option>
            <option value="Adelaide">Adelaide</option>
            <option value="Alicante">Alicante</option>
            <option value="Alton">Alton</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Anchorage">Anchorage</option>
            <option value="Ancona">Ancona</option>
            <option value="Antalya">Antalya</option>
            <option value="Antwerp">Antwerp</option>
            <option value="Arles">Arles</option>
            <option value="Arrecifes">Arrecifes</option>
            <option value="Athens">Athens</option>
            <option value="Auckland">Auckland</option>
            <option value="Avignon">Avignon</option>
            <option value="Balboa">Balboa</option>
            <option value="Bali Denpasar (Benoa)">Bali Denpasar (Benoa)</option>
            <option value="Baltimore">Baltimore</option>
            <option value="Baltra">Baltra </option>
            <option value="Bangkok">Bangkok</option>
            <option value="Barbados">Barbados </option>
            <option value="Barcelona">Barcelona</option>
            <option value="Bari">Bari</option>
            <option value="Barranquilla">Barranquilla</option>
            <option value="Basel">Basel</option>
            <option value="Bayonne">Bayonne</option>
            <option value="Beijing">Beijing</option>
            <option value="Belem">Belem</option>
            <option value="Belfast">Belfast</option>
            <option value="Belgrade">Belgrade</option>
            <option value="Benoa">Benoa</option>
            <option value="Bergen">Bergen</option>
            <option value="Berlin">Berlin</option>
            <option value="Bilbao">Bilbao</option>
            <option value="Bordeaux">Bordeaux</option>
            <option value="Boston">Boston</option>
            <option value="Brindisi">Brindisi</option>
            <option value="Brisbane">Brisbane</option>
            <option value="Broome">Broome</option>
            <option value="Brussels">Brussels</option>
            <option value="Bucharest">Bucharest</option>
            <option value="Budapest">Budapest</option>
            <option value="Buenos Aires">Buenos Aires</option>
            <option value="Busan">Busan</option>
            <option value="Cadiz">Cadiz</option>
            <option value="Cagliari">Cagliari</option>
            <option value="Cairns">Cairns</option>
            <option value="Cairo">Cairo</option>
            <option value="Calcutta">Calcutta</option>
            <option value="Callao">Callao</option>
            <option value="Cannes">Cannes</option>
            <option value="Cape Town">Cape Town</option>
            <option value="Cartagena">Cartagena</option>
            <option value="Casa De Campo">Casa De Campo</option>
            <option value="Casablanca">Casablanca</option>
            <option value="Catania">Catania</option>
            <option value="Cernobbio">Cernobbio</option>
            <option value="Churchill">Churchill</option>
            <option value="Cologne/bonn">Cologne/bonn</option>
            <option value="Colon">Colon</option>
            <option value="Copenhagen">Copenhagen</option>
            <option value="Cozumel">Cozumel</option>
            <option value="Dakar">Dakar</option>
            <option value="Darwin">Darwin</option>
            <option value="Decin">Decin</option>
            <option value="Delhi">Delhi</option>
            <option value="Dijon">Dijon</option>
            <option value="Doha">Doha</option>
            <option value="Dover">Dover</option>
            <option value="Dubai">Dubai</option>
            <option value="Dublin">Dublin</option>
            <option value="Dubrovnik">Dubrovnik</option>
            <option value="Duluth">Duluth</option>
            <option value="Dun Laoghaire">Dun Laoghaire</option>
            <option value="Durban">Durban</option>
            <option value="Edinburgh">Edinburgh</option>
            <option value="Fairbanks">Fairbanks</option>
            <option value="Fort Amador">Fort Amador</option>
            <option value="Fort Lauderdale">Fort Lauderdale</option>
            <option value="Fort de France">Fort de France</option>
            <option value="Frankfurt">Frankfurt</option>
            <option value="Fremantle (Perth)">Fremantle (Perth)</option>
            <option value="Funchal">Funchal</option>
            <option value="Fusina">Fusina</option>
            <option value="Galveston">Galveston</option>
            <option value="Geneva">Geneva</option>
            <option value="Genoa">Genoa</option>
            <option value="Giurgiu">Giurgiu</option>
            <option value="Gran Canaria">Gran Canaria</option>
            <option value="Greenock">Greenock</option>
            <option value="Greenwich">Greenwich</option>
            <option value="Guayaquil">Guayaquil</option>
            <option value="Ha Long Bay">Ha Long Bay</option>
            <option value="Halifax">Halifax</option>
            <option value="Hamburg">Hamburg</option>
            <option value="Hanoi">Hanoi</option>
            <option value="Helsinki">Helsinki</option>
            <option value="Heraklion">Heraklion</option>
            <option value="Ho Chi Minh City">Ho Chi Minh City</option>
            <option value="Hobart">Hobart</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Honolulu">Honolulu </option>
            <option value="Ibiza">Ibiza</option>
            <option value="Ijmuiden (Amsterdam)">Ijmuiden (Amsterdam)</option>
            <option value="Incheon">Incheon</option>
            <option value="Iqaluit">Iqaluit</option>
            <option value="Istanbul">Istanbul</option>
            <option value="Itajai">Itajai</option>
            <option value="Izmir Cumaovasi">Izmir Cumaovasi</option>
            <option value="Jacksonville">Jacksonville</option>
            <option value="Jeddah">Jeddah</option>
            <option value="Johannesburg">Johannesburg</option>
            <option value="Juneau">Juneau</option>
            <option value="Kampong Cham">Kampong Cham</option>
            <option value="Kangerlussuaq">Kangerlussuaq</option>
            <option value="Kaohsiung">Kaohsiung</option>
            <option value="Keelung">Keelung</option>
            <option value="Kicker Rock">Kicker Rock</option>
            <option value="Kiel">Kiel</option>
            <option value="King George Island">King George Island</option>
            <option value="Ko Yao Noi">Ko Yao Noi</option>
            <option value="Kobe">Kobe</option>
            <option value="Kusadasi">Kusadasi</option>
            <option value="Kyoto">Kyoto</option>
            <option value="La Spezia">La Spezia</option>
            <option value="Laem Chabang (Port of Laem Chabang)">Laem Chabang (Port of Laem Chabang)</option>
            <option value="Lake Como">Lake Como</option>
            <option value="Lanzarote">Lanzarote</option>
            <option value="Las Palmas">Las Palmas</option>
            <option value="Lautoka">Lautoka</option>
            <option value="Le Havre">Le Havre</option>
            <option value="Leith (Leith)">Leith (Leith)</option>
            <option value="Lima">Lima</option>
            <option value="Limerick">Limerick</option>
            <option value="Lisbon">Lisbon</option>
            <option value="Liverpool">Liverpool</option>
            <option value="Livorno">Livorno</option>
            <option value="Ljubljana">Ljubljana</option>
            <option value="London">London</option>
            <option value="Long Beach">Long Beach</option>
            <option value="Longyearbyen">Longyearbyen</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Luxor">Luxor</option>
            <option value="Lyon">Lyon</option>
            <option value="Maceio">Maceio</option>
            <option value="Madrid">Madrid</option>
            <option value="Mahe Island">Mahe Island</option>
            <option value="Malaga">Malaga</option>
            <option value="Manaus">Manaus</option>
            <option value="Manila">Manila</option>
            <option value="Marghera">Marghera</option>
            <option value="Marseille">Marseille</option>
            <option value="Medellin">Medellin</option>
            <option value="Melbourne">Melbourne</option>
            <option value="Memphis">Memphis</option>
            <option value="Messina">Messina</option>
            <option value="Miami">Miami</option>
            <option value="Milan">Milan</option>
            <option value="Milwaukee">Milwaukee</option>
            <option value="Minneapolis St Paul">Minneapolis St Paul</option>
            <option value="1893">Mobile</option>
            <option value="Mobile">Mombasa</option>
            <option value="Monte Carlo">Monte Carlo</option>
            <option value="Montevideo">Montevideo</option>
            <option value="Montreal">Montreal</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Munich">Munich</option>
            <option value="My Tho">My Tho</option>
            <option value="Naha">Naha</option>
            <option value="Naples">Naples</option>
            <option value="Nashville">Nashville</option>
            <option value="New Orleans">New Orleans</option>
            <option value="New York City">New York City</option>
            <option value="Nice">Nice</option>
            <option value="Norfolk">Norfolk</option>
            <option value="Nuremberg">Nuremberg</option>
            <option value="Nuuk">Nuuk</option>
            <option value="Okinawa">Okinawa</option>
            <option value="Olbia">Olbia</option>
            <option value="Oranjestad">Oranjestad</option>
            <option value="Osaka">Osaka</option>
            <option value="Oslo">Oslo</option>
            <option value="Otopeni">Otopeni</option>
            <option value="P. Baquerizo (san Cristobal)">P. Baquerizo (san Cristobal)</option>
            <option value="Palermo">Palermo</option>
            <option value="Palma De Mallorca">Palma De Mallorca</option>
            <option value="Panama City">Panama City</option>
            <option value="Papeete">Papeete</option>
            <option value="Paris">Paris</option>
            <option value="Passau">Passau</option>
            <option value="Philadelphia">Philadelphia</option>
            <option value="Phnom Penh">Phnom Penh</option>
            <option value="Phuket">Phuket</option>
            <option value="Piraeus">Piraeus</option>
            <option value="Pointe a Pitre">Pointe a Pitre</option>
            <option value="Port Canaveral ">Port Canaveral </option>
            <option value="Port Louis">Port Louis</option>
            <option value="Porto">Porto</option>
            <option value="Portsmouth">Portsmouth</option>
            <option value="Prague">Prague</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Puerto Williams">Puerto Williams</option>
            <option value="Punta Arenas">Punta Arenas</option>
            <option value="Punta Cana">Punta Cana</option>
            <option value="Puntarenas / Puerta Caldera">Puntarenas / Puerta Caldera</option>
            <option value="Quebec">Quebec</option>
            <option value="Quito">Quito</option>
            <option value="Ravenna (Venice)">Ravenna (Venice)</option>
            <option value="Regensburg">Regensburg</option>
            <option value="Reims">Reims</option>
            <option value="Remich">Remich</option>
            <option value="Reykjavik">Reykjavik</option>
            <option value="Rio De Janeiro">Rio De Janeiro</option>
            <option value="Rome">Rome</option>
            <option value="Rotterdam">Rotterdam</option>
            <option value="Rouen">Rouen</option>
            <option value="Saint Jean de Losne">Saint Jean de Losne</option>
            <option value="Salvador">Salvador</option>
            <option value="San Antonio (San Antonio, Chile)">San Antonio (San Antonio, Chile)</option>
            <option value="San Diego">San Diego</option>
            <option value="San Francisco">San Francisco</option>
            <option value="San Jose">San Jose</option>
            <option value="San Juan">San Juan</option>
            <option value="San Luis Obispo">San Luis Obispo</option>
            <option value="San Sebastian">San Sebastian</option>
            <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
            <option value="Santiago">Santiago</option>
            <option value="Santo Domingo">Santo Domingo</option>
            <option value="Santos">Santos</option>
            <option value="Sasebo">Sasebo</option>
            <option value="Savona">Savona</option>
            <option value="Seattle/Tacoma">Seattle/Tacoma</option>
            <option value="Seward">Seward</option>
            <option value="Shanghai">Shanghai</option>
            <option value="Shanghai (Baoshan)">Shanghai (Baoshan)</option>
            <option value="Shenzhen">Shenzhen</option>
            <option value="Siem Reap">Siem Reap</option>
            <option value="Sinaia">Sinaia</option>
            <option value="Singapore">Singapore</option>
            <option value="Skagway">Skagway</option>
            <option value="Sokhna (Suez)">Sokhna (Suez)</option>
            <option value="Southampton">Southampton</option>
            <option value="Split">Split</option>
            <option value="St Maarten (Philipsburg)">St Maarten (Philipsburg)</option>
            <option value="Stockholm">Stockholm</option>
            <option value="Sydney">Sydney</option>
            <option value="Taipei (Keelung)">Taipei (Keelung)</option>
            <option value="Tampa/St.Petersburg">Tampa/St.Petersburg</option>
            <option value="Tanjung Pinang">Tanjung Pinang</option>
            <option value="Taranto">Taranto</option>
            <option value="Tarragona">Tarragona</option>
            <option value="Tema">Tema</option>
            <option value="Tenerife">Tenerife</option>
            <option value="Tianjin (Beijing)">Tianjin (Beijing)</option>
            <option value="Tilbury">Tilbury</option>
            <option value="Tokyo">Tokyo</option>
            <option value="Toronto">Toronto</option>
            <option value="Toulon">Toulon</option>
            <option value="Trieste">Trieste</option>
            <option value="Tromso">Tromso</option>
            <option value="Trondheim">Trondheim</option>
            <option value="Ushuaia">Ushuaia</option>
            <option value="Valencia">Valencia</option>
            <option value="Valletta">Valletta</option>
            <option value="Valparaiso">Valparaiso</option>
            <option value="Vancouver">Vancouver</option>
            <option value="Vega de Terron">Vega de Terron</option>
            <option value="Venice">Venice</option>
            <option value="Vienna">Vienna</option>
            <option value="Vilshofen">Vilshofen</option>
            <option value="Warnemuende">Warnemuende</option>
            <option value="Washington DC">Washington DC</option>
            <option value="Whittier">Whittier</option>
            <option value="Yokohama">Yokohama</option>
            <option value="Zurich">Zurich</option>
          </optgroup>
        </select>
      </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2">
      <div class="form-group">
        <label class="cruise-label">Month</label>
        <select class="cruise-field" name="departure_month" id="departure_month">
          <option value="0" selected="selected">Select Month</option>
          <option value="2025-07-01 00:00:00|2025-07-31 23:59:59">July 2025</option>
          <option value="2025-08-01 00:00:00|2025-08-31 23:59:59">August 2025</option>
          <option value="2025-09-01 00:00:00|2025-09-30 23:59:59">September 2025</option>
          <option value="2025-10-01 00:00:00|2025-10-31 23:59:59">October 2025</option>
          <option value="2025-11-01 00:00:00|2025-11-30 23:59:59">November 2025</option>
          <option value="2025-12-01 00:00:00|2025-12-31 23:59:59">December 2025</option>
          <option value="2026-01-01 00:00:00|2026-01-31 23:59:59">January 2026</option>
          <option value="2026-02-01 00:00:00|2026-02-28 23:59:59">February 2026</option>
          <option value="2026-03-01 00:00:00|2026-03-31 23:59:59">March 2026</option>
          <option value="2026-04-01 00:00:00|2026-04-30 23:59:59">April 2026</option>
          <option value="2026-05-01 00:00:00|2026-05-31 23:59:59">May 2026</option>
          <option value="2026-06-01 00:00:00|2026-06-30 23:59:59">June 2026</option>
          <option value="2026-07-01 00:00:00|2026-07-31 23:59:59">July 2026</option>
          <option value="2026-08-01 00:00:00|2026-08-31 23:59:59">August 2026</option>
          <option value="2026-09-01 00:00:00|2026-09-30 23:59:59">September 2026</option>
          <option value="2026-10-01 00:00:00|2026-10-31 23:59:59">October 2026</option>
          <option value="2026-11-01 00:00:00|2026-11-30 23:59:59">November 2026</option>
          <option value="2026-12-01 00:00:00|2026-12-31 23:59:59">December 2026</option>
          <option value="2027-01-01 00:00:00|2027-01-31 23:59:59">January 2027</option>
          <option value="2027-02-01 00:00:00|2027-02-28 23:59:59">February 2027</option>
          <option value="2027-03-01 00:00:00|2027-03-31 23:59:59">March 2027</option>
          <option value="2027-04-01 00:00:00|2027-04-30 23:59:59">April 2027</option>
          <option value="2027-05-01 00:00:00|2027-05-31 23:59:59">May 2027</option>
          <option value="2027-06-01 00:00:00|2027-06-30 23:59:59">June 2027</option>
          <option value="2027-07-01 00:00:00|2027-07-31 23:59:59">July 2027</option>
          <option value="2027-08-01 00:00:00|2027-08-31 23:59:59">August 2027</option>
          <option value="2027-09-01 00:00:00|2027-09-30 23:59:59">September 2027</option>
          <option value="2027-10-01 00:00:00|2027-10-31 23:59:59">October 2027</option>
          <option value="2027-11-01 00:00:00|2027-11-30 23:59:59">November 2027</option>
          <option value="2027-12-01 00:00:00|2027-12-31 23:59:59">December 2027</option>
          <option value="2028-01-01 00:00:00|2028-01-31 23:59:59">January 2028</option>
          <option value="2028-02-01 00:00:00|2028-02-29 23:59:59">February 2028</option>
          <option value="2028-03-01 00:00:00|2028-03-31 23:59:59">March 2028</option>
          <option value="2028-04-01 00:00:00|2028-04-30 23:59:59">April 2028</option>
          <option value="2028-05-01 00:00:00|2028-05-31 23:59:59">May 2028</option>
          <option value="2028-06-01 00:00:00|2028-06-30 23:59:59">June 2028</option>
          <option value="2028-07-01 00:00:00|2028-07-31 23:59:59">July 2028</option>
          <option value="2028-08-01 00:00:00|2028-08-31 23:59:59">August 2028</option>
          <option value="2028-09-01 00:00:00|2028-09-30 23:59:59">September 2028</option>
          <option value="2028-10-01 00:00:00|2028-10-31 23:59:59">October 2028</option>
          <option value="2028-11-01 00:00:00|2028-11-30 23:59:59">November 2028</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2">
      <div class="form-group">
        <label class="cruise-label">Length</label>
        <select class="cruise-field" name="length" id="length" >
          <option value="0" selected="selected">Select Length</option>
          <option value="3 - 5 Nights">3 - 5 Nights</option>
          <option value="6 - 9 Nights">6 - 9 Nights</option>
          <option value="10 - 14 Nights">10 - 14 Nights</option>
          <option value="15+ Nights">15+ Nights</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2">
      <div class="form-group">
        <label class="cruise-label">Cruise Lines</label>
        <select class="cruise-field" name="cruise_line" id="cruise_line">
          <option value="0" selected="selected">All Cruise Lines</option>
          <option value="AmaWaterways">AmaWaterways</option>
          <option value="Atlas Ocean Voyages">Atlas Ocean Voyages</option>
          <option value="Avalon Waterways">Avalon Waterways</option>
          <option value="Carnival Cruise Line">Carnival Cruise Line</option>
          <option value="Celebrity Cruises">Celebrity Cruises</option>
          <option value="Costa">Costa </option>
          <option value="Crystal Cruises">Crystal Cruises</option>
          <option value="Cunard Line">Cunard Line</option>
          <option value="Disney Cruise Line">Disney Cruise Line</option>
          <option value="Explora Journeys">Explora Journeys</option>
          <option value="Holland America Line">Holland America Line</option>
          <option value="Hurtigruten Expeditions">Hurtigruten Expeditions</option>
          <option value="MSC Cruises">MSC Cruises</option>
          <option value="Norwegian Cruise Line">Norwegian Cruise Line</option>
          <option value="Oceania Cruises">Oceania Cruises</option>
          <option value="Princess Cruises">Princess Cruises</option>
          <option value="Regent Seven Seas">Regent Seven Seas</option>
          <option value="Royal Caribbean Cruises">Royal Caribbean Cruises</option>
          <option value="Seabourn Cruise Line">Seabourn Cruise Line</option>
          <option value="Silversea Cruises">Silversea Cruises</option>
          <option value="Uniworld Boutique Cruises">Uniworld Boutique Cruises</option>
          <option value="Viking Expeditions Cruises">Viking Expeditions Cruises</option>
          <option value="Viking Ocean Cruises">Viking Ocean Cruises</option>
          <option value="Viking River Cruises">Viking River Cruises</option>
          <option value="Virgin Voyages">Virgin Voyages</option>
          <option value="Windstar">Windstar</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2">
      <label class="cruise-label">&nbsp;</label>
      <button type="submit" name="submit" class="cruise-btn">Search</button>
    </div>
  </div>
</form>
<span id="error" class="error"></span>


<!-- select option without select not submit form -->
<script>
  function validateForm() {
    let isValid = true;
    let errorMessages = [];

    // Get all selects
    const selects = [
      { id: 'destination', label: 'Destination' },
      { id: 'departure_port', label: 'Departure Port' },
      { id: 'departure_month', label: 'Departure Month' },
      { id: 'length', label: 'Length' },
      { id: 'cruise_line', label: 'Cruise Line' }
    ];

    // Clear previous error
    document.getElementById('error').innerHTML = '';

    selects.forEach(select => {
      const value = document.getElementById(select.id).value;
      if (value === "0") {
        isValid = false;
        errorMessages.push(`<span>Please select a valid ${select.label}.</span>`);
      }
    });

    if (!isValid) {
      document.getElementById('error').innerHTML = errorMessages.join("");
    }

    return isValid;
  }
</script>