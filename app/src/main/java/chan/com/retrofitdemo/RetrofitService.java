package chan.com.retrofitdemo;

import chan.com.retrofitdemo.entity.CityXmlEntity;
import chan.com.retrofitdemo.entity.ResultEntity;
import chan.com.retrofitdemo.entity.work.WorkEntity;
import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.Query;

/**
 * Created by zehua_chen on 2017/8/8.
 */

public interface RetrofitService {

    @FormUrlEncoded
    @POST("/test/data.php")
    Call<ResultEntity> getData(@Field("cmd") String cmd, @Field("mobile") String mobile);

    @GET("/WeatherApi")
    Call<CityXmlEntity> getXmlData(@Query("city") String city);

    @GET("/test/parser_xml/index.php")
    Call<WorkEntity> getPHPXmlData();


}
