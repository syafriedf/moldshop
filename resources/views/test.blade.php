<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

@php
                    $time3 = new DateTime();
                @endphp

<form method="POST" action="{{ route('store')}}">
                    @csrf
                        <div class="input-group">
                        <label><b>DATE IN</b></label>
                            <input required="required" class="input--style-1" type="text" placeholder=<?php echo $time3->format("d-m-Y"); ?> value="<?php echo $time3->format("d-m-Y"); ?>" name="date_in" disabled>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <label><b>FROM</b></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="from_dep">
                                            <option disabled="disabled" selected="selected">Departement</option>
                                            <option>MPC</option>
                                            <option>BM</option>
                                            <option>MT</option>
                                            <option>AD</option>
                                            <option>IMM</option>
                                            <option>QA</option>
                                            <option>NPD</option>
                                            <option>AUTOMATION</option>
                                        </select>
                                        <div class="select-dropdown"></div> 
                                        </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <label><b>TO</b></label>
                            <input required="required" class="input--style-1" type="text" placeholder="MS" value="MS" name="to_dep" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <label><b>DIPERLUKAN TGL</b></label>
                                    <input required="required" class="input--style-1 js-datepicker" type="text" placeholder="" name="needed">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <label><b>WEEK</b></label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="week">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                            <option>32</option>
                                            <option>33</option>
                                            <option>34</option>
                                            <option>35</option>
                                            <option>36</option>
                                            <option>37</option>
                                            <option>38</option>
                                            <option>39</option>
                                            <option>40</option>
                                            <option>41</option>
                                            <option>42</option>
                                            <option>43</option>
                                            <option>44</option>
                                            <option>45</option>
                                            <option>46</option>
                                            <option>47</option>
                                            <option>48</option>
                                            <option>49</option>
                                            <option>50</option>
                                        </select>
                                        <div class="select-dropdown"></div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label><b>ITEM</b></label>
                            <input class="input--style-1" placeholder="Silahkan tulis item anda" type="text" name="item">
                        </div>
                    
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <label><b>JENIS</b></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="jenis">
                                            <option disabled="disabled" selected="selected">Jenis</option>
                                            <option>Maintenance</option>
                                            <option>Pembuatan</option>
                                            <option>Perbaikan</option>
                                        </select>
                                        <div class="select-dropdown"></div> 
                                        </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <label><b>JUMLAH</b></label>
                                <input class="input--style-1" placeholder="Masukkan Angka" type="number" name="jumlah">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label><b>PROBLEM</b></label>
                            <input class="input--style-1" placeholder="Masukkan problem anda" type="text" name="problem">
                        </div>
                        <div class="input-group">
                                <label><b>PEMBUAT</b></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="maker">
                                            <option disabled="disabled" selected="selected">PEMBUAT ORDER</option>
                                            <option>Hernanda - IM</option>
                                            <option>Acil Darmawan - BM</option>
                                            <option>Suyadi - AD1</option>
                                            <option>Tinton - QC</option>
                                            <option>Salman - QC</option>
                                            <option>Danny - AD2</option>
                                            <option>Imron - Automation</option>
                                            <option>Anton Herley - Automation</option>
                                            <option>Irwan Santosa - MTP IM</option>
                                            <option>Rubianto - MTP IM</option>
                                            <option>Imam Agus  - Maintenance</option>
                                            <option>Muchtar - MPC</option>
                                            <option>Mustofa - NPD</option>
                                            <option>Endik - NPD</option>
                                        </select>
                                        <div class="select-dropdown"></div> 
                                        </div>
                                </div>
                            <div class="p-t-20">
                            <input class="btn btn--radius btn--green" type="submit">
                        </div>
                    </form>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
