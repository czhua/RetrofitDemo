package chan.com.retrofitdemo;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;

import chan.com.retrofitdemo.entity.CityXmlEntity;
import chan.com.retrofitdemo.entity.work.WorkEntity;
import okhttp3.OkHttpClient;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.simplexml.SimpleXmlConverterFactory;

public class LocationXmlActivity extends AppCompatActivity {

    public static final String MY_LOCAL_BASE_URL = "http://192.168.1.110:8080";
    private static final String TAG = LocationXmlActivity.class.getSimpleName();
    private TextView dataTv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_location_xml);

        dataTv = (TextView) findViewById(R.id.data_tv);
        findViewById(R.id.parser_btn).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                parserData();
            }
        });
    }

    private void parserData() {
        Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(MY_LOCAL_BASE_URL)
                .client(new OkHttpClient())
                .addConverterFactory(SimpleXmlConverterFactory.create())
                .build();
        RetrofitService service = retrofit.create(RetrofitService.class);

        Call<WorkEntity> call = service.getPHPXmlData();
        call.enqueue(new Callback<WorkEntity>() {
            @Override
            public void onResponse(Call<WorkEntity> call, Response<WorkEntity> response) {
                WorkEntity workEntity = response.body();
                dataTv.setText("数据: " + workEntity.toString());
                Log.i(TAG, workEntity.toString());
            }

            @Override
            public void onFailure(Call<WorkEntity> call, Throwable t) {
                Log.i(TAG, t.getMessage());
                dataTv.setText("数据: " + t.getMessage());
            }
        });
    }
}
