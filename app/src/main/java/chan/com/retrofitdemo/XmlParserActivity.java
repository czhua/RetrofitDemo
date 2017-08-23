package chan.com.retrofitdemo;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;

import chan.com.retrofitdemo.entity.CityXmlEntity;
import okhttp3.OkHttpClient;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.simplexml.SimpleXmlConverterFactory;

/**
 * 解析xml页面
 *
 * @author zehua_chen
 *         create at 2017/8/23 11:09
 */
public class XmlParserActivity extends AppCompatActivity {
    public static final String BASE_XML_URL = "http://wthrcdn.etouch.cn";
    private static final String TAG = XmlParserActivity.class.getSimpleName();
    private TextView dataTv;
    private TextView xmlDataTv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_xml_parser);

        findViewById(R.id.get_xml_data_btn).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                getXmlData();
            }
        });
        dataTv = ((TextView) findViewById(R.id.data_tv));
        xmlDataTv = ((TextView) findViewById(R.id.xml_data_tv));
    }

    /**
     * 获取XML数据
     * url : http://wthrcdn.etouch.cn/WeatherApi?city=北京
     */
    private void getXmlData() {
        Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(BASE_XML_URL)
                .client(new OkHttpClient())
                .addConverterFactory(SimpleXmlConverterFactory.create())
                .build();
        RetrofitService service = retrofit.create(RetrofitService.class);

        Call<CityXmlEntity> call = service.getXmlData("北京");
        call.enqueue(new Callback<CityXmlEntity>() {
            @Override
            public void onResponse(Call<CityXmlEntity> call, Response<CityXmlEntity> response) {
                CityXmlEntity entity = response.body();
                dataTv.setText("城市: " + entity.getCity()
                        + "\n更新时间: " + entity.getUpdatetime()
                        + "\n温度: " + entity.getWendu());
                xmlDataTv.setText("XML数据： " + entity.toString());
                Log.i(TAG, entity.toString());
            }

            @Override
            public void onFailure(Call<CityXmlEntity> call, Throwable t) {
                xmlDataTv.setText(t.getMessage());
                Log.i(TAG, t.getMessage());
            }
        });
    }
}
