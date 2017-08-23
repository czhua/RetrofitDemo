package chan.com.retrofitdemo.entity;

import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

/**
 * Created by zehua_chen on 2017/8/23.
 */
@Root(name = "weather")
public class WeatherEntity {

    @Element(name = "date")
    private String date;
    @Element(name = "high")
    private String high;
    @Element(name = "low")
    private String low;
    @Element(name = "day")
    private DayEntity day;
    @Element(name = "night")
    private NightEntity night;

    @Override
    public String toString() {
        return "WeatherEntity{" +
                "date='" + date + '\'' +
                ", high='" + high + '\'' +
                ", low='" + low + '\'' +
                ", day=" + day +
                ", night=" + night +
                '}';
    }
}
