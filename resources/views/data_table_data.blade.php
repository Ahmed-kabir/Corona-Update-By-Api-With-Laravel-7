
 


<tbody>
  @foreach($tst as $data)
                    <tr>
                      <td> {{ $data['Country'] }}</td>
                      <td> {{ $data['CountryCode'] }}</td>
                      <td> {{ $data['Slug'] }}</td>
                      <td> {{ $data['NewConfirmed'] }}</td>
                      <td> {{ $data['TotalConfirmed'] }}</td>
                      <td> {{ $data['NewDeaths'] }}</td>
                      <td> {{ $data['TotalDeaths'] }}</td>
                      <td> {{ $data['NewRecovered'] }}</td>
                      <td> {{ $data['TotalRecovered'] }}</td>
                      <td> {{ $data['Date'] }}</td>
                      
                    </tr>
                    
                  </tbody>
                  @endforeach

                