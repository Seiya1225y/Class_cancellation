
    <!--=================================================
  Form
  ==================================================-->

        <div class="form-group">
            <label for="number" class="control-label col-xs-2">部署</label>
            <div class="col-xs-10">
                <select name="dept_name" class="form-control select select-primary mbl" data-toggle="select">
                    <option value="">全部署</option>
                    <option value="総務部" @if($dept_name=='総務部') selected @endif>総務部</option>
                    <option value="経理部" @if($dept_name=='経理部') selected @endif>経理部</option>
                    <option value="人事部" @if($dept_name=='人事部') selected @endif>人事部</option>
                    <option value="開発部" @if($dept_name=='開発部') selected @endif>開発部</option>
                    <option value="営業部" @if($dept_name=='営業部') selected @endif>営業部</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="number" class="control-label col-xs-2">住所</label>
            <div class="col-xs-10">
                <select name="pref" class="form-control select select-primary mbl" data-toggle="select">
                    <option value="">全国</option>
                    <optgroup label="関東">
                        <option value="茨城県" @if($pref=='茨城県') selected @endif>茨城県</option>
                        <option value="栃木県" @if($pref=='栃木県') selected @endif>栃木県</option>
                        <option value="群馬県" @if($pref=='群馬県') selected @endif>群馬県</option>
                        <option value="埼玉県" @if($pref=='埼玉県') selected @endif>埼玉県</option>
                        <option value="千葉県" @if($pref=='千葉県') selected @endif>千葉県</option>
                        <option value="東京都" @if($pref=='東京都') selected @endif>東京都</option>
                        <option value="神奈川県" @if($pref=='神奈川県') selected @endif>神奈川県</option>
                    </optgroup>
                    <optgroup label="関西">
                        <option value="大阪府" @if($pref=='大阪府') selected @endif>大阪府</option>
                        <option value="京都府" @if($pref=='京都府') selected @endif>京都府</option>
                        <option value="兵庫県" @if($pref=='兵庫県') selected @endif>兵庫県</option>
                        <option value="滋賀県" @if($pref=='滋賀県') selected @endif>滋賀県</option>
                        <option value="奈良県" @if($pref=='奈良県') selected @endif>奈良県</option>
                        <option value="和歌山県" @if($pref=='和歌山県') selected @endif>和歌山県</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10 text-center">
                <button type="submit" class="btn btn-default">検索</button>
            </div>
        </div>

    </form>

@endsection
